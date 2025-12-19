from django import forms

from . import models

class GuestbookForm(forms.ModelForm):
    class Meta:
        model = models.Guestbook
        #fields = "__all__"
        #exclude = ["date"]

        fields=("message",)

    



        