# BarBot API

```
git clone ssh://git@git.sitesoft.ru:2225/veo/barbotapi.git
cd barbotapi
docker-compose build && docker-compose up -d
docker-compose exec app bash
composer install
php artisan migrate
```