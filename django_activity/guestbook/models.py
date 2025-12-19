from django.db import models
from django.utils import timezone
from django.contrib.auth import get_user_model


class Guestbook(models.Model):
    #name = models.CharField(max_length=100)
    owner=models.ForeignKey(get_user_model(), blank=True, null=True, on_delete=models.CASCADE)
    message=models.TextField(max_length=500)
    date=models.DateTimeField(default=timezone.now)
