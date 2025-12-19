from django.db import models
from django.utils import timezone


class Entry(models.Model):
    name = models.CharField(max_length=30)
    message = models.TextField()
    datetime_created = models.DateTimeField(
        default=timezone.now
    )

    class Meta:
        verbose_name = "Entry"
        verbose_name_plural = "Entries"