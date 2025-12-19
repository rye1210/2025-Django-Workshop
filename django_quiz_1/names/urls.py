from django.urls import path
from . import views

app_name="names"

urlpatterns = [
    path("", views.HomeView.as_view(), name="list"), 
    path("raffle/", views.RaffleView.as_view()), 
    path("profiles/<int:id>", views.ProfileView.as_view(), name="profile"),
    path("add", views.NamesView.as_view(), name="add"), 
]