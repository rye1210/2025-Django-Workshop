from django.contrib import admin

from . import models

@admin.register(models.Guestbook)
class PostAdmin(admin.ModelAdmin):
    #list_display = ["id", "name", "message", "date"]
    list_display = ["id",]

