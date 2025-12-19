from django.urls import path
from . import views

app_name="todo_list"

urlpatterns = [
    path("", views.HomeView.as_view(), name="list"),
    path("add", views.CreateTodoListView.as_view(), name="add"),
    path("update/<int:pk>", views.UpdateTodoListView.as_view(), name="update"),
    path("delete/<int:pk>", views.DeleteTodoListView.as_view(), name="delete"),
]
