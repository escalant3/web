# ProteCMS

ProteCMS es gestor para protectoras de animales. Un proyecto que ofrece la posibilidad de tener una página web totalmente gratuita a las protectoras de animales. Cada protectora tendrá total libertad y podrán gestionar su protectora a través de un completo panel de administración.

## Índice
* [Requisitos](#requisitos)
* [Instalación](#instalacion)
    * [Homestead](#homestead)
    * [Clonando el repositorio](#clonando-el-repositorio)
    * [Instalar dependencias](#instalar-dependencias)
    * [Configurar entorno](#configurar-entorno)
* [Gestión del proyecto](#gestion-del-proyecto)
* [Colaboradores](#colaboradores)
* [Errores](#errores)

## Requisitos
- [PHP 7.1](http://php.net/)
- [MySQL 5.6](https://www.mysql.com/)
- [NodeJS (npm)](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

> Todos los requisitos están dentro de Homestead (ver abajo)

## Instalación

### Homestead

Homestead es el paquete oficial de Laravel para Vagrant. 

Instalar siguiendo la [documentación oficial](https://laravel.com/docs/5.3/homestead).

### Clonando el repositorio

Una vez instalado y configurado Homestead se clona el repositorio dentro de la máquina virtual.

```
git clone git@github.com:protecms/web.git
```

### Instalar dependencias

Instalar las dependencias del proyecto:

```
composer install
```

Instalar las dependencias javascript:

```
npm install
```

Una vez instaladas las dependencias ejecutar gulp:

```
gulp
```

### Configurar entorno

Para configurar el entorno hay que duplicar el archivo *.env.example* y nombrarlo como *.env*.

Una vez duplicado, se edita el archivo *.env* para adaptarlo a la configuración del entorno.

## Gestión del proyecto

La gestión de proyecto se realiza mediante [Trello](https://trello.com/b/j4eAFtN1/protecms).

## Colaboradores
- [Jaime Sares](http://jaimesares.com)
- [Ver más...](https://github.com/protecms/cms/graphs/contributors)

## Errores

Si detecta cualquier error, por pequeño que sea, no dudes en ponerte en contacto a web@protecms.com ofreciendo todos los detalles posibles (navegador, versión, sistema operativo, pasos para producirlo, etc). Asegúrate antes de que no está en la columna de Errores en el gestor del proyecto.

