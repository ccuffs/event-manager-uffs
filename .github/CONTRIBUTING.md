# Guia de contribuição

Sua contribuição será muito bem vinda, agradecemos e encorajamos seu interesse. Neste documento, você encontrará um guia de como poderá nos auxiliar. Se deseja ajudar com o código, se encontrou algo de errado ou se possui uma ideia que poderá melhorar o projeto, este documento lhe fornecerá os passos a serem tomados.

## Como contribuir

É possível contribuir de diversas formas. Essencialmente, você pode:

- [Reportar um bug](#reportar-um-bug)
- [Requisitar uma nova funcionalidade](#requisitar-uma-nova-funcionalidade)
- [Indicar uma melhoria](#indicar-uma-melhoria)
- [Implementar uma issue](#implementar-uma-issue)

## Reportar um bug
Um *bug* é uma falha no código que resulta em um comportamento inesperado. Bugs devem ser reportados utilizando [issues](https://github.com/FronteiraTec/event-manager-uffs/issues).

### Guia para criação de um bom relatório de bugs

1. **Certifique-se que a issue ainda não existe:** verifique a lista de issues, buscando por similaridades.
1. **Confira se o problema a ser reportado já não foi resolvido:** neste caso, a issue já estará fechada (verifique a lista de issues resolvidas também) e seu código está desatualizado.
1. **Crie uma issue identificando o problema:** uma issue que descreve um bug deve ser objetiva e concisa porém significativa. Ela deve conter conteúdo suficiente para que seja possível solucionar o problema sem buscar mais informações. Essencialmente, um relatório de erros deve conter:
1. Descrição do ambiente utilizado: browser, versões das ferramentas, etc;
1. Descrição detalhada das condições em que o bug surgiu. Deve ser possível reproduzir o bug apartir desta descrição;
1. Outras informações relevantes, como possíveis soluções;

## Requisitar uma nova funcionalidade

Se você acredita que haja um novo recurso que deve ser implementado, você pode criar uma [issue](https://github.com/FronteiraTec/event-manager-uffs/issues) descrevendo-o. Mas antes de requisitá-lo, tenha em mente:
1. A funcionalidade condiz com o escopo e objetivos do projeto?
1. O problema que a funcionalidade irá solucionar afetará (positivamente) aos usuários?

Descreva o recurso com o maior nível de detalhes possível, bem como a razão pela qual ele deve ser implementado. Se os mantenedores do projeto forem convencidos de que o recurso é pertinente, ele será desenvolvido.

## Indicar uma melhoria

Caso queira sugerir que algum aspecto do projeto seja melhorado, como a estruturação do código, soluções para nossos problemas, funcionalidades de algum recurso, crie uma [issue](https://github.com/FronteiraTec/event-manager-uffs/issues) descrevendo sua ideia. Alguns cuidados são necessários:
1. Certifique-se de que a melhoria já não esteja documentada em issues existentes (busque nas issues fechadas também, ela pode ter sido implementada em versões mais recentes);
1. Questione o quão necessária é a melhoria (é uma demanda específica demais? Possuirá impacto no projeto?);
1. Por fim, basta defender seu ponto de vista, buscando contextualizar os mantenedores sobre a importância da melhoria;


## Implementar uma issue

Trabalhamos no formato de *issues* e *pull requests*, significando que qualquer funcionalidade a ser implementada está listada na seção [Issues](https://github.com/FronteiraTec/event-manager-uffs/issues). Caso queira contribuir com código, escolha uma das issues com a label **enhancement** que ainda não foram reivindicadas (sem *assignees*) - issues com a label **help wanted** são as mais urgentes.

Antes de mais nada, faça um fork do repositório (não esqueça do **star** 😉). Em seguida adicione o remote para o *upstream*.
```
cd <event-manager-uffs-local>
git remote add upstream https://www.github.com/FronteiraTec/event-manager-uffs.git
```

Antes de desenvolver qualquer funcionalidade, garanta que seu branch está atualizado.
```
git pull upstream master
```

Nós encorajamos que você crie uma *branch* baseada na `master`, cujo nome reflita na ideia central da issue a ser implementada, de forma concisa:

```
git checkout master
git checkout -b <nova-branch>
```

Quando terminar de implementar a funcionalidade, basta mandar uma *pull request*, e requisitar que algum mantenedor revise o código.

#### Convenções de código
Para que aceitemos seu código, ele deve atender às convenções e padrões que adotamos.

##### Geral
* Identação de 4 espaços;

##### CSS
* [BEM](http://getbem.com/naming/);

##### HTML / Blade
* Atributos, classes - aspas duplas;

##### JavaScript
* String - aspas simples;
* [Google JavaScript Style Guide](https://google.github.io/styleguide/javascriptguide.xml);
* [Nomes de IDs](https://github.com/FronteiraTec/event-manager-uffs/pull/13#discussion_r376205648);

##### PHP
* String - aspas simples;

##### VueJS
* [style guides](https://vuejs.org/v2/style-guide/);

##### Nome de branches
* [Kebab case](https://en.wiktionary.org/wiki/kebab_case)

**NOTA:** Recomenda-se verificar esse [comentário](https://github.com/FronteiraTec/event-manager-uffs/issues/8#issuecomment-587853458) na issue #8, nele há considerações sobre as _issues_ de front-end;
