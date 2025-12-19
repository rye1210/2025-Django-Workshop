from django import forms

from . import models

class NamesForm(forms.ModelForm):
    class Meta:
        model = models.Names
        fields = "__all__"
