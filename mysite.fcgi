#!/home4/bindsmec/python/bin/python
import sys, os

# Add a custom Python path.
sys.path.insert(0, "/home4/bindsmec/python")
sys.path.insert(13, "/home4/bindsmec/codlr/codlr") #la ruta donde estan todos los archivos de django

os.environ['DJANGO_SETTINGS_MODULE'] = 'codlr.settings'
from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false")
