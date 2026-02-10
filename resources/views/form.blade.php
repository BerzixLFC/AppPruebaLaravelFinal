<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Moderno en Laravel</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --bg-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background: var(--bg-gradient);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h2 { text-align: center; color: #1f2937; margin-bottom: 25px; }
        .input-group { margin-bottom: 15px; }
        label { display: block; font-size: 0.85rem; font-weight: 600; color: #4b5563; margin-bottom: 5px; }

        input, textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            box-sizing: border-box;
            transition: all 0.3s;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }

        button {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
        }
    </style>
</head>
<body>

    <div id="app">
        <div class="glass-card">
            
            <h2>Contacto</h2>
            
            <form action="/contacto" method="GET" @submit="procesando">
                
                <div class="input-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" v-model="nombre" placeholder="Tu nombre" required>
                </div>

                <div class="input-group">
                    <label>Correo Electrónico</label>
                    <input type="email" name="email" v-model="email" placeholder="correo@ejemplo.com" required>
                </div>

                <div class="input-group">
                    <label>Mensaje</label>
                    <textarea name="mensaje" v-model="mensaje" placeholder="Hola, me gustaría..." required></textarea>
                </div>

                <button type="submit">
                    @{{ cargando ? 'Procesando...' : 'Enviar Ahora' }}
                </button>
            </form>

        </div>
    </div>

    <script>
        const { createApp, ref } = Vue;

        createApp({
            setup() {
                const nombre = ref('');
                const email = ref('');
                const mensaje = ref('');
                const cargando = ref(false);

                const procesando = () => {
                    cargando.value = true;
                    // Aquí no usamos preventDefault, permitimos que el navegador viaje a /contacto
                };

                return {
                    nombre, email, mensaje, cargando, procesando
                }
            }
        }).mount('#app')
    </script>
</body>
</html>