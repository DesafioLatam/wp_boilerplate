# Woocommerce

### Instalación

Para habilitar [Woocommerce](https://wordpress.org/plugins/woocommerce/) en tu plantilla primero debes instalar el plugin en el administrador.
Una vez activado el plugin aparecerá una ventana para configurar todo lo relativo a la tienda y, al finalizar, ya estará funcionando en tu plantilla.
No necesitas mayores configuraciones ni ejecución de otros scripts.

---

> Se recomienda crear una plantilla hija (Child-theme) para trabajar con Woocommerce, implica menos trabajo y varios
días menos de dolor de cabeza. Sin embargo crear una plantilla propia no es imposible, solo se necesita tiempo,
tolerancia a la frustración y !muchas ganas!.

> Si ya decidiste crear tu propia plantilla y no una plantilla hija, !felicitaciones! tienes una mentalidad ganadora.
Te recomiendo seguir leyendo, a continuación podrás encontrar información útil para tu desarrollo.

---

Para modificar la visualización de cualquier página deberás tener en cuenta que todos los archivos de la tienda estan dentro de la carpeta wp-content/plugins/woocommerce/templates, por lo tanto deberás ir hasta el archivo y duplicarlo en tu plantilla.
En la parte superior de cada uno de esos archivos te dirá en qué carpeta deberás dejar el archivo en el caso de duplicarlo y además de otra información útil sobre el archivo, por lo tanto te recomiendo darle un vistazo a cada archivo al duplicarlo.
Por otro lado, no se recomienda modificar el archivo desde su ubicación en la carpeta del plugin, de lo contrario perderás todos los cambios una vez actualizado el plugin.

En el caso de estar modificando la visualización de la tienda, te hará de mucha ayuda el plugin [Show Current Template](https://wordpress.org/plugins/show-current-template/), indica qué archivo se esta visualizando y te entregará información valiosa para saber qué archivo debes duplicar desde la plantilla del plugin.

También te será de mucha ayuda el plugin [Simply Show Hooks](https://wordpress.org/plugins/simply-show-hooks/), donde visualizarás qué hooks estan involucrados con cada uno de los elementos que se ven en pantalla.