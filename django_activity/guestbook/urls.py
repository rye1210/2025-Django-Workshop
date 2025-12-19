from django.urls import path
from . import views
from django.contrib.auth.views import LogoutView

app_name="guestbook"

urlpatterns = [
	path("", views.HomeView.as_view(), name="list"),
    path("add", views.CreateGuestbookView.as_view(), name="add"),
    path("update/<int:pk>", views.UpdateGuestbookView.as_view(), name="update"),
    path("delete/<int:pk>", views.DeleteGuestbookView.as_view(), name="delete"),

    path("login", views.MyLoginView.as_view(), name="login"),
    #path("logout", views.MyLogoutView.as_view(), name="logout"),
    path("logout", views.LogoutView.as_view(), name="logout"),

    path("signup", views.SignUpView.as_view(), name="signup"),
]
