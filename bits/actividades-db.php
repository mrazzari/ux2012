<?php

//actividades-db.php

$indiceSlotsActividades = array(
	// indice de las actividades en orden
	'sBustelo', //1
	'iWolcan', //2
	'dLopezCastan', //3
	'eHorcada', //4
	'rGalindez', //5
	'rKohanoff', //6
	'yGuerzovich', //7
	'soke', //8
	'mRazzari', //9
	'vTraynor', //10
	'lorenaPaz', //11
	'mGrieco', //12
	'eMercovich', //13
	'gAuza', //14
	'mDorka', //15
	'eCosenza', //16
	'fFeller', //17
	'eMercovich', //18
	'gErmel', //19
	'JMC', //20
	'vPezzeti' //21
);


$actividades = array(

//10:00 hs

	'sBustelo' => array(
		'nombre' => 'Santiago Bustelo',
		'cargo' => '', //'Director de Diseño, Keikendo',
		'titulo' => '¿Qué podemos aprender los diseñadores de las metodologías ágiles?',
		'donde' => 'Sala C',
		'horario' => '10:00 hs',
		'resumen' => 'Proyectos que se vuelven interminables, clientes insatisfechos y productos finales con los que el equipo no se siente orgulloso, son problemas comunes a muchos proyectos de diseño.
		
		No sólo son problemas evitables, sino que en los últimos años han surgido desde disciplinas de ingeniería, definiciones y soluciones que resultan aplicables a disciplinas de diseño.
		
		La presentación desarrollará conceptos fundamentales, qué aspectos de la metodología Scrum aplican al diseño y cuáles no, y cómo aplicamos metodologías ágiles en la práctica en el paso a paso de un caso real: el rediseño de Guía Oleo.'
		),
		
	'iWolcan' => array(
		'nombre' => 'Ivan Wolcan',
		'cargo' => '',
		'titulo' => 'Innovar desde el diseño de Experiencia de Usuario',
		'donde' => 'Sala D',
		'horario' => '10:00 hs',
		'resumen' => 'Es sabido que la mayoría de los CEO ven la necesidad de innovar para subsistir en el mercado de hoy en día. Es sabido también, que centrar cualquier diseño en usuarios, incrementa las posibilidades de éxito de todo producto o servicio.
		
		Pero ¿Qué es la innovación? ¿Qué es innovar? ¿Cómo están innovando las empresas hoy en día? ¿cuál es la relación que existe con el diseño de experiencia de usuario? ¿Se puede vender innovación?

		Design Thinking, rapid prototyping, entrevistas etnográficas y otras prácticas que ayudan a detectar esos “insights” tan valorados a la hora de innovar sobre algún producto, servicio o proceso.'
		),


	'dLopezCastan' => array(
		'nombre' => 'Diego López Castan',
		'cargo' => '',
		'titulo' => 'Neuropsicología aplicada a la Experiencia de Usuario',
		'donde' => 'Aula 1',
		'horario' => '10:00 hs',
		'resumen' => '¿Cómo puede la Neuropsicología ayudar a mejorar nuestra experiencia de usuario? ¿Qué son los modelos mentales y para que sirven? ¿Las interfaces que creamos puede modificar el cerebro? ¿Por qué  nuestro cerebro prefiere los diseños simétricos? Éstas y otras preguntas van a ser contestadas utilizando ciencias como la Psicología y las Neurociencias, disciplinas que aportan una visión holistica del usuario y son de gran ayuda para mejorar la experiencia de usuario.'
		),

	'eHorcada' => array(
		'nombre' => 'Emiliano Horcada',
		'cargo' => '',
		'titulo' => 'Casos y Experiencias de un equipo de UX.',
		'donde' => 'Aula 2',
		'horario' => '10:00 hs',
		'resumen' => 'En un mercado en el que la creación de experiencias de usuario se ha vuelto un factor determinante en el éxito de un producto digital, la participación y formación de un equipo de UX que pueda presentar soluciones adecuadas se ha vuelto determinante a la hora de conquistar al mercado global. Queremos compartir con la comunidad algunas experiencias, resultados y desafios que tenemos en el equipo de UX de Globant al igual que algunos casos, clientes y contextos con los cual nos hemos enfrentado.'
		),

//11.30 hs

	'rGalindez' => array(
		'nombre' => 'Rodrigo Galindez',
		'cargo' => '',
		'titulo' => 'Microinteracciones',
		'donde' => 'Sala C',
		'horario' => '11:30 hs',
		'resumen' => 'Hacemos microinteracciones todos los días: al enviar un email, compartir un archivo, agrandar una foto, cerrar una pestaña o hacer un retweet. En cada una de ellas, el contacto que tenemos con el software es íntimo; un acercamiento que define nuestra experiencia con el producto. Si las microinteracciones son invisibles y funcionan, la experiencia es positiva y hasta adictiva. Si no funcionan, impactan directamente en la percepción del producto. ¿Cómo podemos diseñar estas microinteracciones para mejorar el UX de una aplicación? ¿Cómo podemos refinar los detalles para hacer que un producto sea exitoso?'
		),

	'rKohanoff' => array(
		'nombre' => 'Rafael Kohanoff',
		'cargo' => '',
		'titulo' => 'Tecnologías para la Salud y la Discapacidad',
		'donde' => 'Sala D',
		'horario' => '11:30 hs',
		'resumen' => 'Una mirada diferente, pensando en la gente y la accesibilidad a los mismos de dispositivos funcionales de calidad y económicos. Experiencias y desarrollos reales realizados desde el INTI (Instituto Nacional de Tecnología Industrial).'
		),

	'yGuerzovich' => array(
		'nombre' => 'Yanina Guerzovich',
		'cargo' => '',
		'titulo' => 'Sistemas de producto-servicio, experiencias de valor desde una mirada holística',
		'donde' => 'Aula 1',
		'horario' => '11:30 hs',
		'resumen' => 'Con un mercado altamente competitivo que vira hacia la provisión de información de servicios y el foco en la sustentabilidad, la necesidad de encontrar soluciones alternativas se ha incrementado. El diseño de Sistemas de Producto-Servicio concibe a sus componentes como parte de un sistema complejo para soluciones de que sumen valor, visibilidad y equidad.  A partir de pensar de manera integrada productos, servicios, comunicación y vínculos entre actores, se busca generar nuevos modelos de negocios que tengan siempre al usuario en el centro.

		A partir de casos exitosos, se introduce este enfoque y sus alcances  como motor de innovación para empresas y respuesta sustentable para el sector público y para la sociedad. Asimismo, se presentan herramientas usadas por el diseñador de sistemas de producto para desarrollar la habilidad de detectar e interpretar fenómenos sociales y su aplicación estratégica para el desarrollo de nuevas experiencias holísticas.'
		),

	'soke' => array(
		'nombre' => 'Sebastián Fernandez Quezada',
		'cargo' => '',
		'titulo' => 'Cocinando experiencias',
		'donde' => 'Aula 2',
		'horario' => '11:30 hs',
		'resumen' => '¿Qué es diseñar una experiencia? ¿Qué nuevas habilidades y herramientas son necesarias para lograr un producto exitoso? ¿Cómo afectan estas técnicas a las aplicaciones Web, Desktop y Mobile? ¿Cómo integrar al diseño y al diseñador en proyectos de desarrollo de software? ¿Cómo obtener buenos resultados recurrentemente?

		Esta charla introductoria dará respuestas a estas preguntas presentando el proceso de diseño y desarrollo de productos de ejemplo.'
		),

// 14:00 hs

	'mRazzari' => array(
		'nombre' => 'Manuel Razzari y Camilo Kawerin',
		'cargo' => '',
		'titulo' => 'Accesibilidad práctica con HTML5 + CSS3 + ARIA',
		'donde' => 'Sala C',
		'horario' => '14:00 hs',
		'resumen' => 'Quienes crean la web se ven frecuentemente limitados por tiempos cortos, costos por hora, otras prioridades, y fundamentalmente por la idea de que al no ser especialistas en accesibilidad, está fuera del alcance de sus proyectos.

		En esta charla veremos formas de trabajo y soluciones puntuales para incorporar la accesibilidad en el flujo de trabajo cotidiano, para desarrollar sitios y aplicaciones web que hagan uso intensivo de las técnicas más modernas de maquetado con HTML5 y CSS3, respetando las propuestas del diseñador visual, sin sacrificar accesibilidad.

		Se explicará cómo podemos usar ARIA (Accessible Rich Internet Applications) para mejorar la accesibilidad de interacciones complejas, sin agotar nuestro presupuesto en el intento.

		Se mostrarán casos de estudio, las necesidades planteadas al comenzar el desarrollo, las alternativas evaluadas y la forma en que fueron resueltas, poniendo énfasis en las técnicas y prácticas que servirán a otros desarrolladores a obtener mejores resultados en su trabajo cotidiano.'
		),

	'vTraynor' => array(
		'nombre' => 'Verónica Traynor',
		'cargo' => '',
		'titulo' => 'Usabilidad: momento eureka!',
		'donde' => 'Sala D',
		'horario' => '14:00 hs',
		'resumen' => 'Generar una interfaz usable implica lograr que esté centrada en las necesidades motrices y mentales de los usuarios.

		La pregunta es cómo medimos la facilidad de uso. ¿A través de encuestas de satisfacción? ¿Siguiendo el movimiento de los ojos? ¿Verificando el trayecto del mouse?

		Lo que aquí presento son principios de interacción que debemos tener en cuenta al momento de diseñar una interacción humano-computadora: Feedback, Affordance, Consistencia, Call to action y la legendaria técnica para comenzar a medir su eficacia: pruebas de usabilidad personalizadas.'
		),
		

	'lorenaPaz' => array(
		'nombre' => 'Lorena Paz',
		'cargo' => '', // 'Socióloga abocada a la Cooperación Tecnológica',
		'titulo' => '¿Qué le aporta el diseño de interacción a la sociedad?',
		'donde' => 'Aula 1',
		'horario' => '14:00 hs',
		'resumen' => 'Sociología de la Usabilidad: ¿Qué le aporta el diseño de interacción a la sociedad?

Mi charla realizará una introducción sobre el objeto de estudio de la Sociología en relación al campo de la Human Computer Interaction. 

Tomando como autor principal al Sociólogo Georg Simmel, brindaré un análisis en terminos históricos de los sucesos compartidos por ambas disciplinas. 

Y responderá las siguientes preguntas: ¿que métodos toma prestados de las Ciencias Sociales el DCU? ¿y cómo los adecua, y para qué fines? ¿Qué hay detrás de la medición de la experiencia del usuario? ¿Qué es la eficiencia?, ¿Qué se mide? ¿Qué no se mide? ¿Para qué sirve la usabilidad? ¿Para que sirve la accesibilidad? ¿para que sirve la inaccesibilidad? Qué le aporta la sociología al diseño de interacción? ¿Qué le aporta el diseño de interacción a la sociedad? 

A tal fin, tomaré tres autores y sus textos claves: "Un enfoque integrado del Diseño Universal. 

Para la inclusión de todas las edades, culturas y diversidades” de Jim Sandhu,  "Los usos de Nielsen: Para una crítica de la ideología de la usabilidad" de Carlos Scolari y "La dinámica de las redes tecno-económicas" de Michel Callon.'
		),

	'mGrieco' => array(
		'nombre' => 'Matt Grieco',
		'cargo' => '',
		'titulo' => 'Making the Case for Connected Ecosystems (en inglés)',
		'donde' => 'Aula 2',
		'horario' => '14:00 hs',
		'resumen' => 'In his presentation (delivered in english), Matthew will explain how user experience has evolved from single channel executions to broader ecosystems of value. 
		
		This presentation will explore different theoretical models of connected ecosystems, establish a process to form an ecosystem that fits the needs for your consumer and provide tips on how to successfully sell through your ideas to clients.'
		
		/*
		About Matthew Grieco
As R/GA’s Buenos Aires Experience Design Director, Matthew is responsible for leading the creation of user-centered experiences that integrate seamlessly into consumers’ lives. 
With over 6 years of experience at R/GA across two global offices he has helped develop innovative creative solutions for a variety of brands such as Verizon, Verizon Wireless, Goldman Sachs, Faena and Televisa. 
About R/GA
We opened R/GA Buenos Aires in July 2010. The office is located in Palermo Soho, the most reasonable and natural place for R/GA as it is one of the culturally richest neighborhoods known for its bohemian and innovative spirit.

Today, with 62 employees, including both Engineers and Creatives, the Buenos Aires office develops and produces a wide variety of technological and mobile projects for our local, regional and global clients.
Visit http://www.rga.com/about/locations/buenos-aires to learn more about R/GA Buenos Aires.
	*/

		),

	'eMercovich' => array(
		'nombre' => 'Eduardo Mercovich',
		'cargo' => '',
		'titulo' => 'Taller de Modelado ágil en UX: casos de uso y diagramas de actividad.',
		'donde' => 'Laboratorio',
		'horario' => '14:00 a 15:20 hs y 15:30 a 16:50 hs',
		'resumen' => 'Es frecuente observar problemas de usabilidad que no surgen (y por lo tanta no son arreglables) desde las interfaces de Usuario, sino que se originan en el flujo propuesto para una tarea o interacción entre actores de un sistema. 
		
		En este taller, veremos cómo utilizar 2 tipos de diagramas simples para co-definir (con todo el equipo) las interacciones de un sistema en función de sus actores y características, de manera de facilitar un diseño sólido sobre el cual crear las interfaces.
		
		<strong class="">La sala tiene capacidad limitada. El taller se realiza dos veces (a las 14:00 y a las 15:30 hs) para permitir una mayor concurrencia.</strong>'
		),


// 15:30 hs

	'gAuza' => array(
		'nombre' => 'Gonzalo Auza',
		'cargo' => '',
		'titulo' => 'Arquitectura de información cross-channel',
		'donde' => 'Sala C',
		'horario' => '15:30 hs',
		'resumen' => 'La información se ha convertido en algo omnipresente con lo que interactuamos de modo constante a través de múltiples canales. Personas, servicios y dispositivos conforman ecosistemas estructurados fuertemente sobre la información; pero las empresas y el estado se relacionan hasta hoy con clientes y ciudadanos a través de canales diseñados de modo aislado.
		
		¿Cómo brindar una continuidad experiencial en este contexto? Un desafío sustancial para el campo de UX es tener una mirada holística y adecuadas herramientas teóricas y metodológicas para abordar el diseño de arquitecturas de información cross-
'
		),

	'mDorka' => array(
		'nombre' => 'Michael Dorka',
		'cargo' => '',
		'titulo' => 'El diseñador de UX, un especialista con múltiples personalidades',
		'donde' => 'Sala D',
		'horario' => '15:30 hs',
		'resumen' => 'Diseño de UX  no sólo es diseño de páginas web o desarrollo de interfaces de software, ni es solamente el área de  diseñadores gráficos o de diseñadores de interfaz. 
		
		Un equipo de UX es multidisciplinario, allí se encuentran especialistas en áreas tales como Sociología, de Psicología, de Literatura y Marketing entre otros. 
		
		En este taller los participantes obtienen información acerca de la participación de especialistas de las distintas áreas en un equipo UX que desarrolló el teléfono inalámbrico de la Telekom alemana “Sinus A201”.'
		),

	'eCosenza' => array(
		'nombre' => 'Emiliano Cosenza',
		'cargo' => '',
		'titulo' => 'Periodismo usable',
		'donde' => 'Aula 1',
		'horario' => '15:30 hs',
		'resumen' => 'El periodismo produce contenido para personas que, según su experiencia con el soporte, los llama lectores, oyentes, televidentes o espectadores.
		
		Cuando generamos contenido para soportes digitales, ¿a quién le comunicamos? A personas, por supuesto. Pero, a diferencia del resto de los medios concebidos en el modelo broadcast, la experiencia que propone un medio digital nos exige pensar, ya no en consumidores, sino en usuarios de la información. 
		
		La idea de la charla es desarrollar cómo producir contenido “usable”, adaptado a las características del soporte. Para ello, hablaremos fundamentalmente sobre la idea de usuario, los cambios en la comunicación y el medio, y por qué es importante empezar a “diseñar” la información en lugar de sólo escribirla.'
		),

	'fFeller' => array(
		'nombre' => 'Fernando Feller',
		'cargo' => '',
		'titulo' => 'Dise&ntilde;ando Storyboards con el usuario a partir de &quot;personas y escenarios&quot;',
		'donde' => 'Aula 2',
		'horario' => '15:30 hs',
		'resumen' => 'Objetivo de la charla: Mostrar, con ejemplos reales, el análisis de usabilidad para un sistema de software mediante la técnica combinada de "personas/escenarios" (Alan Cooper) y storyboard para descubrir las "necesidades" reales de los usuarios.
 
		Punteo de los temas a tratar:</p><ul><li>Introducción</li><li>Usabilidad desde el inicio en Sistemas de software.</li><li>Análisis: trabajo interdisciplinario con desarrolladores del sistema</li><li>Lo que los usuarios dicen y lo que los usuarios realmente "necesitan" (needfinding)</li><li>¿Cómo involucrar activamente al usuario? Conseguir interés y participación.</li><li>Modelado de "personas" (Alan Cooper): se le asigna a los participantes una “persona” y un “escenario”</li><li>Storyboard: descubriendo problemáticas, el flujo de las tareas y el propósito general, no la forma de resolverlo.</li><li>Técnica combinada (story board y personas): Ejemplo con 2 casos reales (un sistema de recluting de RRHH y un sistema de bioinformática). Preparación y experiencia: material, fotos, videos, focus group, afiches resultantes.</li><li>Análisis del resultado: descubrimiento de "nuevas" o "diferentes" necesidades.</li><li>Siguientes pasos: replanteo del problema o solución, nuevas ideas, base para la realización de mockups.</li></ul><p>',

		'cv' => 'Diseñador en comunicación visual (UNLP). 10 años de experiencia en diseño de interacción. Actualmente estoy  a cargo del área de Usabilidad de Flux IT (empresa de tecnologías de información) realizando consultorías, investigación, tests de usuarios, evaluaciones heurísticas, diseño y rediseño de interfaces e interacciones, capacitaciones, etc.'
		),



// 16.30 hs

	'gErmel' => array(
		'nombre' => 'Guillermo Ermel',
		'cargo' => '',
		'titulo' => 'Taller de prototipado rápido y testeo de usabilidad con usuarios',
		'donde' => 'Sala D',
		'horario' => '16:30 hs',
		'resumen' => 'Taller de prototipado rápido y testeo de usabilidad con usuarios

		Utilizando la técnica de prototipado iterativo en papel y de testeo de usabilidad con usuarios, los participantes aprenderán de forma 100% práctica cómo evaluar la usabilidad de sitios web y aplicaciones.'
		),

// 17 hs

	'JMC' => array(
		'nombre' => 'Juan Manuel Carraro',
		'cargo' => '',
		'titulo' => 'Lean UX',
		'donde' => 'Sala C',
		'horario' => '17:00 hs',
		'resumen' => 'El objetivo de la charla es transmitir los conceptos fundamentales del proceso de trabajo Lean UX y las diferencias con los procesos clásicos de Diseño Centrado en el Usuario. Describir los objetivos y la rutina de las pruebas con usuarios en un contexto lean. Explicar en qué contexto es apropiada la introducción del proceso lean.'
		),



	'vPezzeti' => array(
		'nombre' => 'Víctor Pezzeti',
		'cargo' => '',
		'titulo' => 'Usabilidad desde el caso de uso',
		'donde' => 'Aula 1',
		'horario' => '17:00 hs',
		'resumen' => 'Es muy común achacar a la interfaz las responsabilidades de la falta de usabilidad. Mas allá que este sea un punto critico, generalmente los problemas reales hay que buscarlos en lo más profundo del Sistema: el Caso de Uso.

		Procesos mal definidos, solicitud de datos innecesarios, etapas mal ordenadas, información redundante son puntos que generan los mayores problemas al momento de usar un sistema.

		Es imprescindible concentrarse en atender los atributos de usabilidad desde las primeras etapas, incluso antes de la toma de requerimientos:</p><ul><li>Tiempo de aprendizaje</li><li>Velocidad de realización de tareas</li><li>Porcentaje de errores de usuarios</li><li>Retención con el paso del tiempo</li><li>Satisfacción subjetiva</li></ul><p>Cada punto se ilustrará con ejemplos que ayuden a comprender la importancia de su análisis detallado. Se presentará también un caso práctico de redefinición de un caso de uso, aplicando estos conceptos enunciados.',
		
		'cv' => 'Profesor Adjunto en la cátedra Diseño de Sistemas, de la Carrera Ingeniería en Sistemas de Información en la UTN Regional Rosario, materia en la cual los conceptos de Usabilidad representan uno de los ejes principales. Focalizando en factores y medidas para evaluarla, así como también en la aplicación de patrones de interfaz, prestando atención a patrones conceptuales (para la toma de requerimientos).

		En el ámbito empresarial, trabajando desde hace más de 20 años sobre cada una de las etapas del Proceso de Desarrollo. Con amplia experiencia en análisis, desarrollo y diseño de aplicaciones, dedicado actualmente al análisis y testing, sobre todo en aspectos de usabilidad.'
		)
		
		

);

?>