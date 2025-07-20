# InfoCâmara

Aplicação desenvolvida para o processo seletivo da empresa Retta com o objetivo de demostrar meus conhecimentos em Laravel como desenvolvedor fullstack.

## Funcionalidas principais

- [x] Visualização dos deputados
- [x] Visualização das despesas de cada deputado
- [x] Integração com a Api da câmara
- [x] Interface simples e intuitiva

## Tecnologias e libs usadas
- **Laravel** – API robusta.
- **Sail** – Ambiente de desenvolvimento em conteiner.
- **Jobs e Queues** - Trabalhos assíncronos com Laravel.
- **Date-fns** - Formatação de datas.
- **Flowbite** - Componentes lógicos pre configurados.
- **Tailwind** - Estilização Rapida.

## Decisões Técnicas
- **Ajax** - Para melhor fluidez da aplicação todos os dados necessarios para o client são enviados via ajax o que permite mais reatividade
- **API** - Criação de rotas de Api para melhores testes e vialização dos dados via Client Http
- **Blade Components** - Criação de componentes blade para melhor divisão de responsablilidade

## Instruções para execução com Docker
- Clone o repositorio com `git clone https://github.com/DanielDeSousaDEV/Life-Vet-Server.git`
- Certifique-se de ter o Docker instalado e rodando na sua maquina
- Após isso copie o `.env.example` e o renomeie o novo arquivo como `.env`
- Após isso execute o comando `docker compose up` na raiz do projeto para subir os conteiners (isso pode levar alguns minutos)

> **OBS:**
>
> Caso algum erro ocorra tente rodar os comandos acima dentro do WSL (caso esteja usando windows)

- Após espere alguns minutos e sua aplicação estará rodando em [`http://localhost`](http://localhost)
- Para popular o banco com os dados da Api entre em [`http://localhost`](http://localhost) e aperte no icone de carregamento na navbar no canto superior direito
- Caso queria parar o conteiner da aplcação e aperte `ctrl + c` e logo em seguida `docker compose down` para apagar os conteiners 

## Contato
- **Email** - danieldesousa.dev@gmail.com
- **LinkedIn** - [Link para o meu perfil](https://www.linkedin.com/in/daniel-de-sousa-257275314/)
