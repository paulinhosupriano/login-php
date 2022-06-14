# Tela de Login 
No desenvolvimento web, autenticação de usuários é algo bastante comum e serve como mecanismo de segurança para acessos não autorizados a um ambiente onde somente quem tem cadastro pode entrar, como uma área de membros. 

Para acessar ao sistema será necessário utilizar um login(e-mail) e uma senha padrão, configurada na constante AUTENTICATION do arquivo load.php da raiz.

Efetuar configuração de dados na load.php da raiz do projeto.

Padrão MVC [Componentes]
#### Requisitos
* Composer
    - "coffeecode/router": "1.0.8"
    - "twig/twig": "^3.4"
* Padão PSR-4
    "psr-4": {
            "Controller\\": "app/controller/",
            "Core\\": "app/core/",
            "Models\\": "app/models/"
        }


#### Dados de login para autenticar PADRÃO - poderá ser modificado na load.php da raiz.
Login: admin@admin.com | Senha: admin

### Classes [app/controller]
Classes responsáveis para gerenciar as rotas.
* Login
    - index() - recupera mensagem e exibi tela de login, informa mensagem caso exista. [GET]
    - auth(array $data) - efetua a autenticação usando a classe Models\Autentication e utliza classes da Core - [POST]
* Dash
    - __construct() - Ao instânciar, verifica usuário(administrador) autenticado.
    - index() - Exibe painel. [GET]
    - logoff() - efetua a desligação de sessão do usuário autenticado, seta mensagem e redireciona para a tela de login. [GET]

### Classes [app/core]
* Mail
    - static validate($mail) - Verifica se o formato da string tem formato de e-mail email@dominio.extensao - bool [TRUE/FALSE]
* Message
    - setMessage($text, $type = 'success') - Gera uma mensagem via sessão nome 'message' [formato bootstrap] - [https://getbootstrap.com/docs/5.0/components/alerts/]
    - getMessage() - Recupera a mensagem e destoi a sessão 'message'
* Redirect
    -  static  uri($uri = null) - utiliza um header do PHP para redirecionamento de URL, URI constante base configurada no load.php na RAIZ.
* masterController
    - render(string $file, array $data = []) - utilizado para ser instânciado ou herdado, responsável para utilizar o twig, retorna o method render do mesmo(twig).

### Classes [app/models]

* Autentication
    - auth(array $data) - [email, senha] Dados padrões para recebimento e checagem padrão.
    - static isAuth() - [TRUE/FALSE] ) bool


## Funcionalidades

- Autenticação
    - Verificação de dados informado [email,senha]
    - Verificação campo [e-mail] formato válido
    - Checa [e-mail, senha] são válidos campos padrão.
    - Checa campos vazios.
    - Sessão.
    - Mensagens por Sessão.
- Design Bootstrap 5.x - Beta - Design [exemples]


## 🚀 Sobre mim
Ser desenvolvedor e como uma viagem, onde a próxima parada e a solução de um problema.
(Thales Valentim)

## Apêndice

Utilizando Bootstrap v5.2.0-beta1
- https://getbootstrap.com/docs/5.2/getting-started/introduction/


## Autores

- [@paulinhosupriano](https://www.github.com/paulinhosupriano)


## Licença

[MIT](https://choosealicense.com/licenses/mit/)
