## Отностно платформата
<p>Тъй като OLX.bg стана ужасен в последно време, решихме да направим нова иновативна платформа базирана на React/Laravel която е
доста по-бърза и проста от сегашния OLX(Продавалник)</p>

## Инсталация (Dev)
**1. Клониране на repository-то** 
```
git clone https://github.com/Tsvetomirov/prodavalnikreunion-backend.git
```

**2. Инсталиране на composer и пакетите му** 
```
composer install
```
**3. Създаване на .env файла** 
```
cp .env.example .env
php artisan key:generate
```
**4. Мигриране на базата данни** 
```
php artisan migrate
```
**5. Стартиране на Development сървъра**
```
php artisan serve
```

## WIKI
<p>SOON</p>
