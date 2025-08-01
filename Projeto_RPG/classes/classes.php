<?php

abstract class Personagem {
    public $forca, $defesa, $esquiva, $velocidade, $inteligencia, $vida, $tipo, $classe, $img, $descricao;

    public function ataqueComum() {
        echo 'Ataque comum básico <br>';
    }
    public function defender() {
        echo 'Defendendo ataque <br>';
    }
    public function esquivar() {
        echo 'Esquivando do ataque <br>';
    }
    public function fugir() {
        echo 'Fugindo da batalha <br>';
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
    public function __get($atributo) {
        return $this->$atributo;
    }

    abstract public function ataqueEspecial();
}

// Heróis
class Goku extends Personagem {
    public $forca = 120;
    public $defesa = 100;
    public $esquiva = 110;
    public $velocidade = 120;
    public $inteligencia = 80;
    public $vida = 150;
    public $img = 'goku.jpg';
    public $descricao = 'O lendário Saiyajin, conhecido por seu poder crescente e determinação sem fim.';

    public function ataqueEspecial() {
        echo 'Kamehameha (150)<br>';
        echo 'Genki Dama (200)';
    }
}

class Vegeta extends Personagem {
    public $forca = 115;
    public $defesa = 95;
    public $esquiva = 105;
    public $velocidade = 115;
    public $inteligencia = 85;
    public $vida = 140;
    public $img = 'vegeta.jpg';
    public $descricao = 'O príncipe dos Saiyajins, orgulhoso e sempre buscando superar Goku.';

    public function ataqueEspecial() {
        echo 'Final Flash (160)<br>';
        echo 'Big Bang Attack (180)';
    }
}

class Gohan extends Personagem {
    public $forca = 100;
    public $defesa = 90;
    public $esquiva = 100;
    public $velocidade = 110;
    public $inteligencia = 90;
    public $vida = 130;
    public $img = 'gohan.jpg';
    public $descricao = 'Filho de Goku, possui grande potencial e poder escondido.';

    public function ataqueEspecial() {
        echo 'Masenko (130)<br>';
        echo 'Rugido do Guerreiro (140)';
    }
}

class TrunksDoFuturo extends Personagem {
    public $forca = 110;
    public $defesa = 95;
    public $esquiva = 105;
    public $velocidade = 110;
    public $inteligencia = 85;
    public $vida = 135;
    public $img = 'trunksdofuturo.jpg';
    public $descricao = 'Um guerreiro do futuro com grande habilidade em combate e espada poderosa.';

    public function ataqueEspecial() {
        echo 'Golpe do Espadachim (140)<br>';
        echo 'Rajada de Energia do Futuro (160)';
    }
}

class Piccolo extends Personagem {
    public $forca = 95;
    public $defesa = 100;
    public $esquiva = 90;
    public $velocidade = 90;
    public $inteligencia = 100;
    public $vida = 130;
    public $img = 'piccolo.jpg';
    public $descricao = 'Um guerreiro Namekuseijin sábio e estrategista, com poderosas técnicas de energia.';

    public function ataqueEspecial() {
        echo 'Explosão de Energia (130)<br>';
        echo 'Rajada de Raios (150)';
    }
}

class Goten extends Personagem {
    public $forca = 80;
    public $defesa = 75;
    public $esquiva = 100;
    public $velocidade = 110;
    public $inteligencia = 60;
    public $vida = 120;
    public $img = 'goten.jpg';
    public $descricao = 'Filho mais novo de Goku, ágil e poderoso mesmo jovem.';

    public function ataqueEspecial() {
        echo 'Golpe Kamehameha Júnior (120)<br>';
        echo 'Rajada de Energia Leve (130)';
    }
}

class Kuririn extends Personagem {
    public $forca = 70;
    public $defesa = 65;
    public $esquiva = 110;
    public $velocidade = 105;
    public $inteligencia = 75;
    public $vida = 110;
    public $img = 'kuririn.jpg';
    public $descricao = 'O melhor amigo de Goku, um lutador habilidoso e astuto.';

    public function ataqueEspecial() {
        echo 'Kienzan (130)<br>';
        echo 'Golpe de Energia Rápido (140)';
    }
}

class MestreKame extends Personagem {
    public $forca = 50;
    public $defesa = 70;
    public $esquiva = 85;
    public $velocidade = 75;
    public $inteligencia = 120;
    public $vida = 100;
    public $img = 'mestrekame.jpg';
    public $descricao = 'O mestre lendário que treinou Goku e seus amigos, sábio e forte.';

    public function ataqueEspecial() {
        echo 'Kamehameha Mestre (140)<br>';
        echo 'Golpe da Tartaruga (150)';
    }
}


// Vilões
class Freeza extends Personagem {
    public $forca = 130;
    public $defesa = 110;
    public $esquiva = 90;
    public $velocidade = 100;
    public $inteligencia = 85;
    public $vida = 140;
    public $img = 'freeza.jpg';
    public $descricao = 'O tirano galáctico com poder destrutivo imenso e crueldade implacável.';

    public function ataqueEspecial() {
        echo 'Rajada de Energia (150)<br>';
        echo 'Explosão Final (190)';
    }
}

class Cell extends Personagem {
    public $forca = 125;
    public $defesa = 120;
    public $esquiva = 95;
    public $velocidade = 105;
    public $inteligencia = 90;
    public $vida = 135;
    public $img = 'cell.jpg';
    public $descricao = 'Ser bio-artificial com habilidades copiadas de vários lutadores.';

    public function ataqueEspecial() {
        echo 'Kamehameha (140)<br>';
        echo 'Explosão Solar (180)';
    }
}

class Majin_Boo extends Personagem {
    public $forca = 120;
    public $defesa = 110;
    public $esquiva = 80;
    public $velocidade = 90;
    public $inteligencia = 70;
    public $vida = 140;
    public $img = 'majinboo.jpg';
    public $descricao = 'Uma criatura poderosa e imprevisível, capaz de se regenerar e usar magia negra.';

    public function ataqueEspecial() {
        echo 'Rajada de Energia Maligna (150)<br>';
        echo 'Explosão Rosa (180)';
    }
}

class Broly extends Personagem {
    public $forca = 140;
    public $defesa = 100;
    public $esquiva = 75;
    public $velocidade = 85;
    public $inteligencia = 60;
    public $vida = 160;
    public $img = 'broly.jpg';
    public $descricao = 'O lendário Super Saiyajin, uma força destrutiva imparável movida pela raiva.';

    public function ataqueEspecial() {
        echo 'Onda de Raiva (170)<br>';
        echo 'Golpe Destruidor (190)';
    }
}

class Zamasu extends Personagem {
    public $forca = 110;
    public $defesa = 90;
    public $esquiva = 95;
    public $velocidade = 100;
    public $inteligencia = 130;
    public $vida = 130;
    public $img = 'zamasu.jpg';
    public $descricao = 'Um deus corrompido, com grande poder divino e habilidades místicas.';

    public function ataqueEspecial() {
        echo 'Lâmina Divina (140)<br>';
        echo 'Julgamento Celestial (180)';
    }
}

class Jiren extends Personagem {
    public $forca = 135;
    public $defesa = 120;
    public $esquiva = 90;
    public $velocidade = 110;
    public $inteligencia = 80;
    public $vida = 150;
    public $img = 'jiren.jpg';
    public $descricao = 'O guerreiro mais forte do Universo 11, conhecido por sua força esmagadora e disciplina.';

    public function ataqueEspecial() {
        echo 'Punho Inquebrável (160)<br>';
        echo 'Explosão de Energia Suprema (200)';
    }
}

class Beerus extends Personagem {
    public $forca = 130;
    public $defesa = 110;
    public $esquiva = 120;
    public $velocidade = 125;
    public $inteligencia = 110;
    public $vida = 140;
    public $img = 'beerus.jpg';
    public $descricao = 'O Deus da Destruição, poderoso e imprevisível, capaz de destruir planetas com facilidade.';

    public function ataqueEspecial() {
        echo 'Golpe Divino (180)<br>';
        echo 'Destruição Cósmica (210)';
    }
}

?>
