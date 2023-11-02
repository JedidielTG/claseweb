# README PROGRAMA ACOMODADOR DE NUMEROS.


#Usabilidad del codigo
#Tiene Autenticación de usuario:

El programa comienza solicitando al usuario un nombre de usuario y una contraseña. Está configurado para permitir el acceso al usuario. 
Si el usuario y la contraseña coinciden, se muestra un mensaje de bienvenida. Si no coinciden, se muestra un mensaje de "Acceso denegado".

#Entrada de lista de números:

Después de la autenticación, el programa solicita al usuario que ingrese una lista de números separados por espacios.
El programa advierte al usuario de que cualquier letra ingresada será ignorada y que se pueden ingresar números decimales utilizando el punto como separador decimal.

#Procesamiento de la entrada:

La entrada del usuario se divide en una lista de cadenas utilizando el método split().
Luego, el programa recorre cada elemento de la lista y trata de convertirlo en un número. Si tiene éxito, agrega el número a la lista numeros. Si no se puede convertir, muestra un mensaje de error indicando que se ha ingresado algo que no es un número.
Si se produce un error de división por cero al intentar convertir una cadena en un número, se mostrará un mensaje de error.

#Ordenamiento de la lista de números:
Si hay números válidos en la lista numeros, el programa llama a la función ordenar_lista(lista) para ordenar la lista de números de manera ascendente. Luego muestra la lista ordenada.

#Gestión de errores:

El programa maneja posibles errores como el ingreso de letras en lugar de números o la división por cero y muestra mensajes de error correspondientes.

#Eficiencia

La estructura de control if-else utilizada para autenticar al usuario tiene una eficiencia constante, ya que realiza una única comparación de cadenas y, por lo tanto, no depende del tamaño de los datos de entrada.
La eficiencia de la estructura try-except que maneja la conversión de cadenas a números es constante en la mayoría de los casos, ya que solo procesa un elemento de la lista a la vez. 

La llamada a la función sorted() para ordenar la lista de números tiene una eficiencia O(n log n), como se mencionó anteriormente. Aunque el uso de try-except para la conversión de números se realiza antes de ordenar,
el ordenamiento es la operación más costosa en términos de eficiencia.

La estructura try-except utilizada para manejar errores relacionados con la conversión de cadenas a números tiene una eficiencia constante en la mayoría de los casos.

Realizo Jedidiel Toto Garcia.
