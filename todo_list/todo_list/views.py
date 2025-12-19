from django.http import HttpResponse
from django.views import View
from todo_list import models
from django.views.generic import ListView, DetailView, TemplateView, CreateView, UpdateView, DeleteView
from django.urls import reverse_lazy

from .import models
from .import forms

# Common settings for the views
class CommonViewSettings:
    model = models.Todo
    form_class = forms.TodoListForm
    success_url = reverse_lazy("todo_list:list")

#Add New Task
class CreateTodoListView(CommonViewSettings, CreateView):
    template_name = "todo_list/add.html"

#Update Task    
class UpdateTodoListView(CommonViewSettings, UpdateView):
    template_name = "todo_list/update.html"

#Delete Task
class DeleteTodoListView(DeleteView):
    template_name = "todo_list/delete.html"
    model=models.Todo
    success_url = reverse_lazy("todo_list:list")

#Index View
class HomeView(ListView):
    template_name = "todo_list/index.html"
    model = models.Todo

    context_object_name="task"

    def get_queryset(self):
        qs=super().get_queryset()
        qs=qs.order_by("date")

        return qs

