# Guia de contribuição
É fantástico seu interesse em contribuir, nesse guia explicaremos como funciona o nossos processos internos e como podemos trabalhar juntos da melhor forma possível.

## Como Contribuir
Existem diversas maneiras possíveis de como contribuir com o projeto:
 - [Reportando Bugs](#reportando-bugs)
 - [Indicando Melhorias](#indicando-melhorias)
 - [Pedindo Funcionalidades](#pedindo-funcionalidades)
 - [Discutindo as issues](#discutindo-as-issues)
 - [Fazendo pull requests](#fazendo-pull-requests)
 - [Outras formas de contribuir](#outras-formas-de-contribuir)

## Reportando bugs
Se você tiver encotrado um bug você pode reportá-lo usando as [issues do github](https://github.com/FronteiraTec/event-manager-uffs/issues). Entretando é essencial que você verifique alguns detalhes antes de faze-lo:
1. Atualize seu repositório local no branch `master` original. É possível que seu bug já tenha sido corrigido nas versão mais recente.
2. Verifique caso seu bug já tenho sido reportado fazendo uma busca nas [issues do projeto](https://github.com/FronteiraTec/event-manager-uffs/issues).

Se o seu bug de fato não foi resolvido ou acolhido então está na hora de criar uma [nova issue](https://github.com/FronteiraTec/event-manager-uffs/issues/new). Seja sucinto na escolha de um título e evite nomes genéricos como "Problemas na execução das migrations" ou "Está dando erro 500 no caminho localhost:8000".

Se possível faça o uso de imagens, videos ou logs de modo a facilitar o processo de reprodução do problema. Use um software como [LICEcap](https://www.cockos.com/licecap/) para criar um gif de sua tela. Informe detalhes sobre o seu ambiente como sistema operacional, navegador e versão, etc. Você também deve adicionar a label **bug** à issue.

### Nota sobre falhas de segurança
Se você encontrou alguma falha de segurança **não use as issues para reportar o bug**. Escreva o seu report via e-mail diretamente para algum administrador do projeto. Ele será analisado, validado e corrigido de acordo com as necessidades. Pedimos que **não torne a falha pública** para segurança de todos que utilizam o projeto em seu estado atual.

### Indicando melhorias
Outra ótima forma de contribuir é indicando melhorias ao código do projeto e em como ele está estruturado. Se você tem qualquer ideia de como podemos melhorar alguma abordagem na solução de problemas, refatoração de código, melhoria em algum recurso ou qualquer outra coisa relacionada, siga estes passos:
1. Verifique se sua ideia já não foi proposta em nosso [roadmap](ROADMAP.md).
2. Da mesma forma verifique se sua idéia já não esteja descrita em algumas de [nossas issues](https://github.com/FronteiraTec/event-manager-uffs/issues);
3. "Venda seu peixe", argua de modo convincente explicando porque sua ideia deve ser abraçada. Eis alguns pontos a considerar:
    1. Você realmente está propondo uma ideia bem definida ou apenas um conjunto de ideias?
    2. Qual o problema sua ideia resolve?
    3. Por quê sua sugestão é melhor do que o que existe?
    4. É viável demandar tempo para implementar sua ideia levando em conta nossas prioridades?
    
Tendo passado pelo crivo de todos estes questionamentos basta criar uma [nova issue](https://github.com/FronteiraTec/event-manager-uffs/issues/new) descrevendo as melhorias e usando o label feature ou melhoria.

### Pedindo Funcionalidades
Tendo em vista o que estamos construindo junto com a comunidade, novas funcionalidades tem prioridade relativa. Vale a pena enviar sua sugestão de funcionalidade apenas se:
1. O recurso em questão resolve um problema que não é resolvido por nada que já exista no projeto;
2. O recurso resolve um problema real validado por pessoas que estão em contato direto com a utilização do projeto.

Para criar seu pedido de funcionalidade [crie uma nova issue](https://github.com/FronteiraTec/event-manager-uffs/issues/new) usando o label **feature**.

### Discutindo as issues

Antes de partirmos para o código em si é muito importante discutirmos com a
comunidade como cada issue será abordada. Toda e qualquer questão deve ser
colocada em discussão para que qualquer pessoa que deseje solucionar aquele
problema tenha o máximo de informações para executar uma solução.

Idealmente todas as issues devem ter um plano de ação claro antes que qualquer
código seja escrito. Sabemos que muitas vezes isto não é possível, sendo
necessário explorar e analisar melhor o que foi indicado. Nestes casos, publique
todas as suas descobertas nas discussões indicando caminhos e recebendo o
feedback da comunidade a respeito do que está sendo proposto.

Issues que estão em processo de discussão devem receber o label **discussão**
indicando que aquela issue precisa dos inputs e feedbacks dos membros da
comunidade.

### Fazendo pull requests

Depois de ter um plano de ação relativamente claro você deve estar pronto para
contribuir com código. Para isso faça um fork do projeto e trabalhe em cima de
um branch diferente de master implementando suas soluções. Para saber mais sobre
pull requests e como eles funcionam, veja
[este link](https://help.github.com/articles/about-pull-requests/).

Antes de abrir seu PR (pull request) certique-se que:

- O código realmente resolve um problema real (de preferência baseado em alguma
  issue levantada);
- Seu PR resolve uma issue apenas. Se você quiser fazer mais de uma coisa,
  divida em vários PRs;
- Seu código é funcional (ou algo próximo disso). Providencie testes se
  possível;
- As mensagens de seus commits são claras e descrevem bem o trabalho. Para
  maiores dicas sobre como escrever mensagens de commit adequadas, veja
  [este guia](https://chris.beams.io/posts/git-commit/).

### Outras formas de contribuir

Se você não trabalha com código mas quer ajudar o projeto, existe muitas outras
formas de contribuir:

- Ajude com a documentação do projeto;
- Fale sobre o projeto nas suas redes sociais, blogs, etc. Espalhe a palavra;
- Organize eventos e dê palestras sobre o projeto;
- Crie material promocional como apresentações, screencasts, mídia para
  compartilhamento em redes sociais, etc;
- Viu alguma discussão que te interessa e onde você pode acrescentar mesmo sem
  conhecimento técnico? Não se acanhe e participe também nas issues do GitHub.

Pensou em alguma outra forma de contribuir? Compartilha com a gente!

# Créditos

Este documento foi escrito com o auxílio de outros documentos similares
utilizados em outras comunidades. Destacamos:

- [projeto](https://github.com/portabilis/projeto/blob/master/code-of-conduct.md)
- [Metabase](https://github.com/metabase/metabase/blob/master/docs/contributing.md)
- [Ghost](https://docs.ghost.org/v1/docs/contributing)
- [Ember.js](https://github.com/emberjs/ember.js/blob/master/CONTRIBUTING.md)
- [Ruby on Rails](https://github.com/rails/rails/blob/master/CONTRIBUTING.md)
- [Propostas de William Espindola](https://github.com/portabilis/projeto/issues/201)
- [i-educar](https://github.com/portabilis/i-educar)
- [ccuffs](https://github.com/ccuffs/template/blob/master/CONTRIBUTING.md)

... dentre outros!
