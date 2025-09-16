@echo off
cd /d "C:\laragon\www\interactive_screen"
start "" "C:\laragon\bin\php\php-8.2.25-nts-Win32-vs16-x64\php.exe" artisan serve
timeout /t 2
taskkill /F /IM chrome.exe /T
start "" chrome --new-window --start-fullscreen "http://127.0.0.1:8000"