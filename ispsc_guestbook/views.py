from django.http import HttpResponse
from django.views.generic import (
    ListView, DetailView,
    CreateView, UpdateView, DeleteView
)

from . import models
from . import forms

from django.urls import reverse_lazy


class CommonViewSettings:
    model = models.Entry
    form_class = forms.CreateEntryForm
    success_url = reverse_lazy("guestbook:list")


class CreateEntryView(CommonViewSettings, CreateView):
    template_name = "guestbook/add.html"


class UpdateEntryView(CommonViewSettings, UpdateView):
    template_name = "guestbook/update.html"


class EntryListView(ListView):
    template_name = "guestbook/index.html"
    model = models.Entry
    context_object_name = "entries"


#class ProfileView(DetailView):
#    template_name = "names/profile.html"
#    model = models.Name
#    context_object_name = "person"
#    pk_url_kwarg = "id"
    #queryset = models.Name.objects.filter(active=True)

#    def get_object(self):
#        obj = super().get_object()
#        if obj.first_name.upper().startswith("V"):
#            raise Http404
#        return obj
