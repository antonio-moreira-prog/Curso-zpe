<!DOCTYPE html>
<html>
    <head>
        <title>Formulário HTML</title>
    </head>
    <body>
    <h1>Formulário HTML</h1>
    <form>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha"><br>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem"></textarea><br>

        <label for="genero">Gênero:</label>
        <select id="genero" name="genero">
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
            <option value="outro">Outro</option>
        </select><br>

        <label for="aceitar-termos">Aceitar Termos:</label>
        <input type="checkbox" id="aceitar-termos" name="aceitar-termos"><br>

        <input type="submit" value="Enviar" >
        <button><a href="{{route('outraPagina')}}">Ir para Página 2</a></button>
    </form>
    <h2>Route:</h2>
    <p>Página 1 {{route('outraPagina')}}</p>

    </body>
</html>


