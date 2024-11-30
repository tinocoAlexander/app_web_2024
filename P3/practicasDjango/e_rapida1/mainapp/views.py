from django.shortcuts import render, redirect
from django.contrib import messages
# Create your views here.

def custom_404_view(request, exception):
    messages.error(request, 'Página no encontrada.')
    return redirect('mainapp:inicio')

def index(request):
    return render(request, 'mainapp/index.html', {
      'title': 'Esto es el inicio',
      'content': 'Este es el contenido de inicio'  
    })

def about(request):
    return render(request, 'mainapp/about.html', {
      'title': 'Esto es el acerca de',
      'content': 'Este es el contenido de acerca de'  
    })

def mision(request):
    return render(request, 'mainapp/mision.html', {
      'title': 'Esta es la pantalla de mision',
      'content': 'Este es el contenido de mision'  
    })

def vision(request):
    return render(request, 'mainapp/vision.html', {
      'title': 'Esta es la pantalla de vision',
      'content': 'Este es el contenido de vision'  
    })

def registro(request):
    return render(request, 'mainapp/registro.html', {
      'title': 'Esta es la pantalla de registro',
      'content': 'Este es el contenido de registro'  
    })

def iniciarSesion(request):
    return render(request, 'mainapp/iniciarSesion.html', {
      'title': 'Esta es la pantalla de iniciar sesion',
      'content': 'Este es el contenido de iniciar sesion'  
    })
