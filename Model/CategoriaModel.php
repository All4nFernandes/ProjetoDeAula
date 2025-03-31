<?php

require_once __DIR__ . "..\..\config\Database.php";

class CategoriaModel
{

    protected $conn;
    private $tabela = "categoria";
    

    public function __construct()
    {

        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar()
    {
        $query = "SELECT * FROM $this->tabela";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();


    }

    public function buscarPorId($id)
    {
        $query = "SELECT * FROM $this->tabela WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function login($username, $senha)
    {
        $query = "SELECT * FROM usuarios WHERE username = :username AND senha = :senha";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();

        return $stmt->fetchAll();
    }


    public $categorias = [
        [
            'id' => '1',
            'nome' => 'Eletrônicos',
            'descricao' => 'Dispositivos como smartphones, notebooks e tablets.'
        ],
        [
            'id' => '2',
            'nome' => 'Eletrodomésticos',
            'descricao' => 'Produtos para o lar como geladeiras, fogões e máquinas de lavar.'
        ],
        [
            'id' => '3',
            'nome' => 'Roupas e Acessórios',
            'descricao' => 'Moda masculina, feminina e infantil, incluindo calçados.'
        ],
        [
            'id' => '4',
            'nome' => 'Beleza e Cuidados Pessoais',
            'descricao' => 'Produtos de maquiagem, perfumes e skincare.'
        ],
        [
            'id' => '5',
            'nome' => 'Saúde e Bem-estar',
            'descricao' => 'Suplementos, vitaminas e produtos para cuidados pessoais.'
        ],
        [
            'id' => '6',
            'nome' => 'Alimentos e Bebidas',
            'descricao' => 'Itens de mercado, bebidas e produtos gourmet.'
        ],
        [
            'id' => '7',
            'nome' => 'Casa e Decoração',
            'descricao' => 'Móveis, iluminação e artigos de decoração.'
        ],
        [
            'id' => '8',
            'nome' => 'Esportes e Lazer',
            'descricao' => 'Equipamentos esportivos, roupas fitness e bicicletas.'
        ],
        [
            'id' => '9',
            'nome' => 'Automotivo',
            'descricao' => 'Peças, acessórios e produtos para veículos.'
        ],
        [
            'id' => '10',
            'nome' => 'Brinquedos e Jogos',
            'descricao' => 'Jogos de tabuleiro, brinquedos educativos e eletrônicos.'
        ],
        [
            'id' => '11',
            'nome' => 'Papelaria e Escritório',
            'descricao' => 'Materiais escolares, organizadores e móveis para escritório.'
        ],
        [
            'id' => '12',
            'nome' => 'Livros e Mídia',
            'descricao' => 'Livros físicos, e-books e materiais educativos.'
        ],
        [
            'id' => '13',
            'nome' => 'Música e Instrumentos Musicais',
            'descricao' => 'Instrumentos, acessórios e equipamentos de áudio.'
        ],
        [
            'id' => '14',
            'nome' => 'Pet Shop',
            'descricao' => 'Rações, brinquedos e acessórios para pets.'
        ],
        [
            'id' => '15',
            'nome' => 'Ferramentas e Construção',
            'descricao' => 'Materiais para reformas, ferramentas e equipamentos de segurança.'
        ],
        [
            'id' => '16',
            'nome' => 'Relógios e Óculos',
            'descricao' => 'Relógios de pulso, óculos de grau e de sol.'
        ],
        [
            'id' => '17',
            'nome' => 'Energia Solar e Sustentabilidade',
            'descricao' => 'Placas solares, lâmpadas LED e produtos ecológicos.'
        ],
        [
            'id' => '18',
            'nome' => 'Segurança e Monitoramento',
            'descricao' => 'Câmeras de segurança, alarmes e fechaduras eletrônicas.'
        ],
        [
            'id' => '19',
            'nome' => 'Viagem e Turismo',
            'descricao' => 'Mochilas, malas de viagem e acessórios para turismo.'
        ],
        [
            'id' => '20',
            'nome' => 'Serviços Digitais',
            'descricao' => 'Cursos online, assinaturas e consultorias digitais.'
        ]
    ];


}