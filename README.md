# Laravel 指令

## controller

```=
#建立controller
php artisan make:controller NameController

#建立controller並且建立預設方法
php artisan make:controller NameController --resource
```

## migration
```=
# 建立migration
php artisan make:migration create_name_table
```

## model

```=
# 建立model
php artisan make:model Name

php artisan make:model Name -mrc
# -m migration, -r resource, -c controller

# Model名稱首字大寫並使用英文單數
```

## 其他

```=
#啟動開發伺服器
php artisan serve
```
