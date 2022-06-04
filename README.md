# Tela de Login 
No desenvolvimento web, autenticação de usuários é algo bastante comum e serve como mecanismo de segurança para acessos não autorizados a um ambiente onde somente quem tem cadastro pode entrar, como uma área de membros. 

Para acessar ao sistema será necessário utilizar um login(e-mail) e uma senha padrão, configurada na constante AUTENTICATION do arquivo load.php da raiz.

#### Dados de login para autenticar.
Login: admin@admin.com | Senha: admin



### Classes Core Actions
* auth($login, $password) Checa login e senha confere com os dados da CONSTANTE de configuração confere com os dados informado retorna: TRUE | FALSE.
* isAuth() - Verifica se a autenticação existe, retorna TRUE | FALSE. 
* redirect($uri) Redireciona para uri informada.
* isLogoff() Efetua a ação de logoff.
* setMessage($text, $type = 'success') seta informações de mensagens no sistema em sessão. combina com retorno da função getMessage().
* getMessage() Retorna mensagem da sessão, combina com função setMessage().
* isMail($mail) Verifica o valor passado pelo $mail e um formato de e-mail válido. ex: email@dominio.com retorno TRUE | FALSE


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

