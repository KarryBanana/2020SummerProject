from django.urls import path
from . import views

app_name = 'doc'

urlpatterns = [
    path('save_doc/',views.save_doc,name='save_doc'),
    path('get_doc/',views.get_doc,name='get_doc'),
]