# Тестовое задания

## Что сделано

1. PHP-скрипт, который выполняется 5 секунд и блокируется от повторных запусков через Redis.  
---

## Запуск

```bash
docker compose up -d
docker exec -it demo_app sh
php taskers/demo_tasker.php
```

Сложность: 3/10
Время: около 1 часа
