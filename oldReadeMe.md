Frontend:
	- Autenticación:

    a) Acceso al Frontend:
        	Método: GET
       	 	Ruta: /frontend
        	Descripción: Permite acceder a la interfaz del juego en modo front.

    b) Registro de Alias:
        	Método: POST
        	Ruta: /frontend/register
        	Datos:
            		- alias (cadena): Alias único del jugador.

	- Juego:

     	a) Obtener Pregunta:
        	Método: GET
        	Ruta: /frontend/question
        	Descripción: Muestra una pregunta para el jugador.

    	b) Responder Pregunta:
        	Método: POST
        	Ruta: /frontend/answer
        	Datos:
            		- answer (cadena): La respuesta seleccionada por el jugador.
        	Descripción: Almacena la respuesta dada por el jugador en la tabla 'historial'.

Backend:
	- Autenticación:

	    a) Acceso al Backend:
        		Método: GET
        		Ruta: /backend
        		Descripción: Permite acceder a la interfaz de administración en modo back.

	- Gestión de Preguntas:

    	 a) Listar Preguntas:
        	Método: GET
        	Ruta: /backend/questions
        	Descripción: Muestra la lista de preguntas existentes.

	b) Crear Pregunta:
        	Método: POST
        	Ruta: /backend/question/create
        	Datos:
            		- question (cadena): Texto de la pregunta.
            		- options (array): Opciones de respuesta.
            		- correct_option (entero): Índice de la opción correcta.
        	Descripción: Crea una nueva pregunta y sus opciones.

    	c) Editar Pregunta:
        	Método: PUT
        	Ruta: /backend/question/edit/{question_id}
        	Datos:
            		- question (cadena): Nuevo texto de la pregunta.
            		- options (array): Nuevas opciones de respuesta.
            		- correct_option (entero): Nuevo índice de la opción correcta.
        	Descripción: Modifica una pregunta existente.

    	d) Eliminar Pregunta:
        	Método: DELETE
        	Ruta: /backend/question/delete/{question_id}
        	Descripción: Elimina una pregunta y sus respuestas posibles.



	- Gestión de Respuestas:

    	a) Listar Respuestas del Historial:
        	Método: GET
        	Ruta: /backend/history
        	Descripción: Recupera el historial de respuestas de los jugadores.

   	b) Eliminar Respuestas del Historial:
        	Método: DELETE
        	Ruta: /backend/history/delete/{history_id}
        	Descripción: Elimina una entrada específica del historial de respuestas.
