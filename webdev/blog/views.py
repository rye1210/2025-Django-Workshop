from django.http import HttpResponse
from django.views.generic import TemplateView

from . import models

class HomeView2(TemplateView):
    template_name = "blog/index.html"

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context["posts"] = [
            {
                "title": "First Post!",
                "post": "This is my first <b>blog</b> post!", 		#if mayroong html tags sa loob ng string, lalabas siya as it is. Ito ang security feature ng django para di ma-inject ng mga attackers ang malicious code sa site mo.
            }
        ]
        return context
    
class HomeView(TemplateView):
    template_name = "blog/index.html"
    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context["posts"] = models.Post.objects.filter(active=True).all()
        return context