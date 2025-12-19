from django.db import models
from django.utils import timezone


class Todo(models.Model):
    name = models.CharField(max_length=100)
    task=models.TextField(max_length=500)
    status = models.CharField(
        max_length=20,
        choices=[
            ('pending', 'Pending'),
            ('in_progress', 'In Progress'),
            ('completed', 'Completed')
        ],
    )
    date=models.DateTimeField(default=timezone.now)
    
    class Meta:
        verbose_name="todo"
        verbose_name_plural="todos"