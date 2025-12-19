from django import forms

from . import models

class TodoListForm(forms.ModelForm):
    class Meta:
        model = models.Todo
        fields = "__all__"
