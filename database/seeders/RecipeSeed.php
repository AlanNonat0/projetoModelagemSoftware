<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = [
            [
                'id' => 1, 'created_by' => 'Alan Nonato',
                'name' => 'BOLO DE FUBÁ COM GOIABADA',
                'description' => 'delicioso bolo de fubá',
                'category_id' => '1',
                'ingredients' => '1 ovo\r\n1 copo (americano) de leite\r\n1 copo (americano) de fubá\r\n1 copo (americano) de açúcar\r\n1/2 copo (americano) de óleo\r\n1 copo (americano) farinha de trigo\r\n1 colher de fermento em pó\r\ngoiabada em pedaços\r\nerva-doce a gosto',
                'preparation' => 'Misture no liquidificador o ovo, o leite, o óleo, o açúcar, o fubá e bata bem.\r\nDespeje a mistura em uma tigela, e misture com a farinha e o fermento em pó.\r\nDespeje a massa em uma forma untada com manteiga e farinha, e acrescente uma camada de goiabada. Repita este processo até preencher toda a forma.\r\nLeve ao forno médio (180° C preaquecido, por 40 minutos.',
                'save' => 50,
                'image' => 'default.png',
            ],
            [
                'id' => 2, 'created_by' => 'Ruth Danielle',
                'name' => 'BOLO DE FUBÁ',
                'description' => 'bolo caseiro de fubá',
                'category_id' => '1',
                'ingredients' => '3 ovos inteiros\r\n2 xícaras (chá) de açúcar\r\n2 xícaras (chá) de fubá\r\n3 colheres (sopa) de farinha de trigo\r\n1/2 copo (americano) de óleo\r\n1 copo (americano) de leite\r\n1 colher (sopa) de fermento em pó',
                'preparation' => 'Em um liquidificador, adicione os ovos, o açúcar, o fubá, a farinha de trigo, o óleo, o leite e o fermento, depois bata até a massa ficar lisa e homogênea.\r\nDespeje a massa em uma forma untada e polvilhada.\r\nLeve para assar em forno médio 180 °C) preaquecido por 40 minutos.',
                'save' => 40,
                'image' => 'default.png',
            ],
            [
                'id' => 3,
                'created_by' => 'Julio Gois',
                'name' => 'Bolinho de chuva simples',
                'description' => 'bolinho de chuva crocante',
                'category_id' => '1',
                'ingredients' => '1 ovo\r\n1/2 xícara (chá) de açúcar\r\n1/2 xícara (chá) de leite\r\n1 xícara (chá) e 1/2 de Farinha de Trigo Tradicional\r\n1 colher (sopa) de fermento químico em pó\r\n2 xícaras (500 ml) de óleo (para fritar)\r\n1 xícara (100 g) de açúcar\r\n1 colher (café) de canela (em pó)',
                'preparation' => 'Misture em um bowl o ovo e o açúcar.\r\nAcrescente o leite, a Farinha de Trigo e o fermento. Mexa muito bem.\r\nAqueça o óleo a 180°C e frite aos poucos os bolinhos de chuva, modelando com a ajuda de duas colheres. Retire e deixe escorrer em cima do papel-toalha.\r\nMisture o açúcar com a canela em pó e passe os bolinhos.',
                'save' => 6,
                'image' => 'default.png',
            ],
            [
                'id' => 4,
                'created_by' => 'Alan Nonato',
                'name' => 'BOLO TRUFADO',
                'description' => 'Bolo delicioso de chocolate trufado decorado com cerejas',
                'category_id' => '1',
                'ingredients' => 'Massa:\r\n6 gemas\r\n6 claras em neve\r\n1 xícara de chocolate em pó \r\n2 xícaras de farinha\r\n1/2 xícara de óleo\r\n1 pitada de sal\r\n1 colher de fermento em pó \r\n1 xícara de açúcar\r\n1 xícara de água fervente\r\nRecheio Trufado Escuro:\r\n1 lata de leite condensado\r\n1 lata de creme de leite\r\n4 colheres de chocolate em pó\r\n1 colher de manteiga\r\n1/4 xícara de rum (opcional)\r\nRecheio Trufado Claro:\r\n300 g de chocolate branco ou 1 barra\r\n1 xícara e meia de creme de leite sem soro\r\n3 colheres de rum (opcional)\r\nCobertura:\r\n300 g de chocolate ao leite derretido ou 1 barra\r\n1 lata de creme de leite\r\n3 colheres de rum (opcional)',
                'preparation' => 'Bata as gemas, o chocolate em pó, a farinha, o sal, o açúcar, o óleo e a água fervente. Acrescente as claras em neve e o fermento, misture bem.\r\nUnte uma forma redonda e bem funda (tipo panetone) de farinha e manteiga. Coloque a mistura e leve para assar mais ou menos uns 40 minutos em forno médio.\r\nRetire do forno e deixe esfriar um pouco. Corte o bolo em três pedaços (três tampas).\r\nReserve\r\nTrufado escuro:\r\nMisture os 4 primeiros ingredientes, leve ao fogo para engrossar (brigadeiro duro). Junte o creme de leite e o rum com o fogo já desligado.\r\nRecheie a primeira base do bolo.\r\nObs: Se quiser tire um pouco da massa do bolo do fundo e também se quiser faça meia receita que é suficiente.\r\nTrufado claro:\r\nDerreta o chocolate, misture o creme de leite e o rum, batendo bem. Leve esse recheio para gelar e recheie a segunda base do bolo.\r\nCobertura:\r\nDerreta o chocolate, misture com o creme de leite e o rum, mexa bem e cubra o bolo.\r\nObs: Se quiser coloque um pouco do recheio claro para mesclar.\r\nMontagem: Bolo\r\nTrufa escura\r\nBolo\r\nTrufa clara\r\nBolo\r\nCobertura',
                'save' => 30,
                'image' => 'bolo.jpg',
            ],
            [
                'id' => 5,
                'created_by' => 'Julio Gois',
                'name' => 'MASSA DE PIZZA',
                'description' => 'Que tal surpreender com uma pizza caseira e cheia de sabor?!',
                'category_id' => '2',
                'ingredients' => '1 kg de farinha de trigo\r\n30 g de fermento biológico\r\n3 xícaras de água morna\r\n3/4 xícaras de óleo\r\n1 colher (chá) de sal\r\n1 colher (chá) de açúcar\r\n1 colher (sopa) de pinga',
                'preparation' => 'Misture o fermento, o sal e o açúcar em um pouco de água morna, até que o fermento esteja completamente dissolvido.\r\nEm seguida, adicione metade da medida de farinha de trigo, o óleo e mexa até criar uma consistência pastosa.\r\nAcrescente o restante da farinha de trigo, a pinga, a água morna e misture bem.\r\nAssim que a massa desgrudar das mãos, deixe crescer por 30 minutos.\r\nAbra os discos, fure a massa com um garfo e pincele o molho.\r\nLeve ao forno médio (180° C), preaquecido, por 15 minutos.',
                'save' => 9,
                'image' => 'pizza.jpg',
            ],
            [
                'id' => 6,
                'created_by' => 'Alan Nonato',
                'name' => 'SOPA DE LENTILHA',
                'description' => 'Sopa de lentilha repleta de temperos e sabores diferenciados.',
                'category_id' => '2',
                'ingredients' => '1 e 1/2 xícaras de lentilha\r\n3 batatas descascadas e cortadas em cubos\r\n1 cenoura grande em cubos\r\n1 gomo de linguiça calabresa em cubos\r\n1 pimenta dedo-de-moça sem sementes picadinha (opcional)\r\nsal,manjericão,salsinha e cebolinha a gosto\r\n1 cebola picada\r\n2 dentes de alho espremidos\r\n2 colheres (sopa) de óleo ou azeite',
                'preparation' => 'Em uma panela de pressão aquecer o óleo ou azeite e refogar o alho e a cebola.Acrescentar a lentilha, o sal e 3 xícaras de água quente.\r\nDeixar no fogo até amolecer a lentilha (não deixei de molho),aproximadamente 20 minutos.\r\nJuntar:batata,cenoura,calabresa,manjericão,pimenta e mais 2 xícaras de água quente.Deixar por 10 minutos após pegar pressão.Desligar o fogo e colocar a salsinha e cebolinha.Servir em seguida.',
                'save' => 7,
                'image' => 'sopa.jpg',
            ],
            [
                'id' => 7,
                'created_by' => 'Julio Gois',
                'name' => 'MILKSHAKE DE MORANGO',
                'description' => 'Colorido e delicioso. Perfeito para as crianças.',
                'category_id' => '3',
                'ingredients' => '3 bolas de sorvete de morango\r\n1 copo de leite gelado\r\ncobertura para sorvete de morango',
                'preparation' => 'Bata o leite e o sorvete no liquidificador por 1 minuto.\r\nDecore um copo grande com cobertura de morango .\r\nDespeje o batido no copo.',
                'save' => 5,
                'image' => 'default.png',
            ],
            [
                'id' => 8,
                'created_by' => 'Alan Nonato',
                'name' => 'ARROZ SOLTINHO',
                'description' => 'Receita infalível para que seu arroz sempre fique bem soltinho.',
                'category_id' => '2',
                'ingredients' => '2 dentes de alho picados\r\n1 fio de sopa de óleo\r\n1 colher de chá de sal\r\n2 xícaras de arroz\r\n3 xícaras de água quente',
                'preparation' => 'Lave bem o arroz.\r\nColoque a água para ferver.\r\nSoque o alho picado.\r\nEm seguida, numa panela, coloque o alho picado e socado, espere. Acrescente então o óleo e deixe dourar.\r\nQuando o alho começar a suar, adicione o arroz.\r\nRefogue o arroz, e em seguida, coloque a água quente e o sal.\r\nBaixe o fogo, deixe a panela semitapada e deixe cozinhar até a água secar.\r\nPronto.',
                'save' => 10,
                'image' => 'arroz.jpg',
            ],
            [
                'id' => 9,
                'created_by' => 'Ruth Danielle',
                'name' => 'HAMBÚRGUER ARTESANAL',
                'description' => 'Receita clássica capaz de conquistar todos os paladares.',
                'category_id' => '2',
                'ingredients' => '3 kg de carne moída (escolha uma carne magra e macia)\r\n300 g de bacon moído\r\n1 ovo\r\n3 colheres (sopa) de farinha de trigo\r\n3 colheres (sopa) de tempero caseiro: feito com alho, sal, cebola, pimenta e cheiro-verde processados no liquidificador\r\n30 ml de água gelada',
                'preparation' => 'Misture todos os ingredientes muito bem e amasse para que fique tudo muito bem misturado.\r\nFaça porções de 90 g a 100 g.\r\nForre um plástico molhado em uma bancada e modele os hambúrgueres utilizando um aro como base.\r\nFaça um de cada vez e retire o aro logo em seguida.\r\nForre uma assadeira de metal com plástico, coloque os hambúrgueres e intercale camadas de carne e plásticos (sem apertar).\r\nFaça no máximo 4 camadas por forma e leve para congelar.\r\nRetire do congelador, frite ou asse e está pronto.',
                'save' => 4,
                'image' => 'default.png',
            ],
            [
                'id' => 10,
                'created_by' => 'Ruth Danielle',
                'name' => 'TORTA DE MAÇÃ',
                'description' => 'Receita queridinha. Ideal para dias mais frios.',
                'category_id' => '1',
                'ingredients' => '*** MASSA: ***\r\n70 g de manteiga sem sal (temperatura ambiente)\r\n1 e 1/2 xícaras de farinha de trigo\r\n1 ovo\r\n1 colher de sobremesa de açúcar\r\nRaspas de limão\r\n1 colher de sobremesa de fermento em pó\r\n*** CREME: ***\r\n500 ml de leite\r\n2 gemas\r\n2 colheres de sopa de maizena\r\n1 lata de leite condensado\r\n*** COBERTURA: ***\r\n2 maçãs fatiadas\r\n400 ml de suco de laranja coado\r\n1 colher de sopa de amido de milho\r\nAçúcar a gosto',
                'preparation' => '*** MASSA: ***\r\nMisture a manteiga, o ovo, o açúcar e as raspas de limão.\r\nColoque a farinha e o fermento e amasse até ficar lisa.\r\nUnte uma assadeira redonda de desmontar e coloque a massa no fundo e nas laterais.\r\nLeve para assar em forno pré-aquecido até dourar (cerca de 10 minutos).\r\nDeixe esfriar.\r\n*** CREME: ***\r\nColoque em uma panela todos os ingredientes do creme e mexa até engrossar.\r\nDesligue e deixe esfriar.\r\n*** COBERTURA: ***\r\nLeve ao fogo o suco de laranja, a amido de milho o açúcar e mexa até engrossar.\r\nAssim que a massa e o creme estiverem em temperatura ambiente, coloque o creme sobre a massa.\r\nColoque as maças fatiadas com casca e sobre elas a calda de laranja.\r\nLeve para gelar por 4 horas e desenforme na hora de servir.',
                'save' => 9,
                'image' => 'torta.jpg',
            ],
            [
                'id' => 11,
                'created_by' => 'Julio Gois',
                'name' => 'CAFÉ COLOMBIANO',
                'description' => 'Café diferenciado de sabor intenso.',
                'category_id' => '3',
                'ingredients' => '1 litro de água fervendo\r\n3 colheres de sopa de pós de café da sua preferência\r\nAçúcar ou adoçante a gosto',
                'preparation' => 'Primeiramente, coloque a água para ferver;\r\nEnquanto isso, pegue o coador de café e o filtro;\r\nColoque o filtro no coador e posicione o mesmo em cima da garrafa térmica;\r\nAdicione o pó de café no filtro;\r\nEntão, quando a água estiver pronta, coloque ela aos poucos no no coador;\r\nQuando já tiver utilizado toda a água;\r\nSeu café está pronto!;\r\nE se preferir, adicione o açúcar ou adoçante a gosto para finalizar.',
                'save' => 5,
                'image' => 'default.png',
            ],
        ];

        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}
