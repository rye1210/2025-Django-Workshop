from django.http import HttpResponse
from django.views import View
from guestbook import models
from django.views.generic import (
    ListView, DetailView, CreateView, UpdateView, DeleteView
    )

from .import models
from .import forms

from django.urls import reverse_lazy
from django.http import Http404

from django.contrib.auth.views import LoginView, LogoutView
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.mixins import LoginRequiredMixin

class SignUpView(CreateView):
    form_class = UserCreationForm
    success_url = reverse_lazy("guestbook:login")
    template_name = "registration/signup.html"

class MyLoginView(LoginView):
    template_name = "auth/login.html"
    #next_page=reverse_lazy("guestbook:list")

#class MyLogoutView(LogoutView):
    #next_page=reverse_lazy("guestbook:list")
    #pass

class CommonViewSettings(LoginRequiredMixin):
    model = models.Guestbook
    form_class = forms.GuestbookForm
    success_url = reverse_lazy("guestbook:list")

class CreateGuestbookView(CommonViewSettings, CreateView):
    template_name = "guests/add.html"

    def form_valid(self, form):
        if not self.request.user.is_authenticated:
            #return super().form_invalid(form)
            form.add_error(None, "You must be logged in to add a guestbook entry.")
            return super().form_invalid(form)
        
        if "shit" in form.data["message"]:
            form.add_error("message", "Inappropriate language is not allowed.")

            return super().form_invalid(form)
            
        form.instance.owner = self.request.user
            
        return super().form_valid(form)

class UpdateGuestbookView(CommonViewSettings, UpdateView):
    template_name = "guests/update.html"

class DeleteGuestbookView(DeleteView):
    template_name = "guests/delete.html"
    model=models.Guestbook
    success_url = reverse_lazy("guestbook:list")

    def get_object(self, *args, **kwargs):
        if not self.request.user.is_authenticated:
            return None
        
        obj=None
        try:
            if self.request.user.is_superuser:
                obj = super().get_object(*args, **kwargs)
        except Http404:
            return None
        
        return obj

class HomeView(ListView):
    template_name = "guests/index.html"
    model = models.Guestbook 

    context_object_name="guests"

    def get_queryset(self):
        qs=super().get_queryset()
        qs=qs.order_by("date")

        return qs