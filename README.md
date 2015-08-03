TCMaterialDesign Web
===========================================

[English version](https://github.com/viniciusthiengo/tc-material-design/blob/master/README-EN.md)

## Projeto ##

Essa é a versão Web ou segunda parte da APP TCMaterialDesign que passou a ser a APP oficial dos exemplos nos vídeos do [canal Thiengo Calopsita no YouTube](https://www.youtube.com/user/thiengoCalopsita).

## Instalação / Importação ##

Realize o clone ou baixe o arquivo .zip desse projeto server side no GitHub. Caso tenha feito o download do .zip, descompactar ele no diretório raiz de execução do PHP em seu package server (WAMP, ou MAMP, ou LAMP), o mesmo para o clone, no mesmo local. Depois apenas abra seu IDE ou editor de código favoritos e então carregue o projeto (em caso de IDE) ou abra os arquivos indicados no vídeo diretamente em seu editor de código.

*Note que estou assumindo que você já tem um servidor local rodando ao menos com as seguintes tecnologias: Apache 2.+, PHP 5.+ e MySQL5.*

Depois vá em /conf/ e abra o arquivo conf.sql. Copie e cole o conteúdo de arquivo dentro de um editor de códigos SQL. O MySQL Workbench é gratuito e permite que você faça esse tipo de execução com o SGBD MySQL de forma bem simples. Executado com sucesso o código que estava em conf.sql seu script então já estará hábil para acessar a base de dados local (ou remota, você escolhe) em sua máquina. Atualize o arquivo /conf/conf.php, mais precisamente atualize o array `$settingsDatabase` para conter os dados de conexão de sua base de dados. Feito isso provavelmente o projeto já deve estar rodando sem problemas.

*Se for utilizar o servidor local para comunicação com a APP Android não se esqueça de utilizar o IPv4 de sua máquina na rede ao invés de utilizar apenas o localhost. Ex. : `http://192.168.25.221:8888/TCMaterialDesign/package/ctrl/CtrlCar.php`*

## Requerimentos ##

* PHP 5.5.+
* MySQL 5.+
* Apache 2.+ (NGINX pode ser utilizado também)

# Onde acompanhar o conteúdo do Blog #

* [Blog Thiengo Calopsita](http://www.thiengo.com.br/)
* [YouTube](https://www.youtube.com/user/thiengoCalopsita)
* [Facebook](https://www.facebook.com/thiengoCalopsita)
* [Google+](https://plus.google.com/+ThiengoCalopsita/posts)
* [Twitter](https://twitter.com/thiengoCalops)
* [LinkedIn](https://www.linkedin.com/pub/vin%C3%ADcius-thiengo/80/9b1/517)

Tem também a APP do Blog:

* [APP Blog Thiengo Calopsita](https://play.google.com/store/apps/details?id=br.thiengocalopsita&hl=pt_BR)

Sinta-se livre para enviar qualquer dica, correção, ... se possível, em caso de uma solução encontrada para um possível problema informado em algum dos vídeos, coloque também na área de comentários do Blog a solução encontrada, assim ajuda a todos que tiverem o mesmo problema.