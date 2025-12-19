from django.urls import path, include

from . import views

app_name = "guestbook"


urlpatterns = [
    path("", views.EntryListView.as_view(), name="list"),
    path("add", views.CreateEntryView.as_view(),
         name="add"),
    path("update/<int:pk>", views.UpdateEntryView.as_view(),
         name="update"),
]