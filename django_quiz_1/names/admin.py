from django.contrib import admin

from . import models

@admin.register(models.Names)
class PostAdmin(admin.ModelAdmin):
    pass

