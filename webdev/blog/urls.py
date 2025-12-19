from django.urls import path
from . import views                         #sa loob ng directory na blog

urlpatterns = [
	path("exercise1", views.HomeView2.as_view()),
    path("exercise2", views.HomeView.as_view()),
]
 
