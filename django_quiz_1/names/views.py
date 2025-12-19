import random
from django.http import HttpResponse
from django.views.generic import (ListView, DetailView, CreateView, TemplateView)

from . import models
from django.shortcuts import get_object_or_404
from django.http import Http404
from django.urls import reverse_lazy

from .import forms

class HomeView(ListView):
    template_name = "names/index.html"
    model = models.Names
    
class RaffleView(TemplateView):
    template_name = "names/raffle.html"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        objs = models.Names.objects.filter(active=True).all()

        if objs.count():
            winner=random.choice(objs)
        else:
            winner=None
        context['winner'] = winner
        return context

class ProfileView(DetailView):
    template_name="names/profiles.html"
    model=models.Names
    context_object_name="person"
    pk_url_kwarg="id"
    
    def get_object(self):
        obj=super().get_object()
        
        if obj.first_name.upper().startswith("V"):
            raise Http404
        return obj

class NamesView(CreateView):
    template_name = "names/add.html"
    model = models.Names
    form_class = forms.NamesForm

    success_url = reverse_lazy("names:list")

        