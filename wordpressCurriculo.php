<?php

$other_db_name = "bdpcdforms";
$other_db_user = "bdpcdforms";
$other_db_password = "Bdpcdforms123@";
$other_db_host = "bdpcdforms.mysql.dbaas.com.br";

$other_db = new wpdb($other_db_user, $other_db_password, $other_db_name, $other_db_host);
$other_db->set_prefix("wp_");

class Curriculo
{

    private ?int $id;
    private string $nome;
    private string $email;
    private string $contato;
    private string $raca;
    private string $estado;
    private string $cidade;
    private string $deficiencia;
    private string $cid;
    private string $limitacao;
    private string $laudo;
    private string $cargo;
    private string $interesse;
    private string $formacao;
    private string $expectativa_salarial;
    private string $curriculo;
    private string $preferencia_contato;
    private string $redes_sociais;

    public function __construct(?int   $id, string $nome, string $email, string $contato, string $idade, string $genero, string $raca, string $estado, string $cidade, string $deficiencia, string $cid, string $limitacao,
                                string $laudo, string $cargo, string $interesse, string $formacao, string $expectativa_salarial, string $modelo_trabalho, string $regime_trabalho, string $preferencia_contato, string $redes_sociais, \DateTime $criado_em)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->contato = $contato;
        $this->idade = $idade;
        $this->genero = $genero;
        $this->raca = $raca;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->deficiencia = $deficiencia;
        $this->cid = $cid;
        $this->limitacao = $limitacao;
        $this->laudo = $laudo;
        $this->cargo = $cargo;
        $this->interesse = $interesse;
        $this->formacao = $formacao;
        $this->expectativa_salarial = $expectativa_salarial;
        $this->modelo_trabalho = $modelo_trabalho;
        $this->regime_trabalho = $regime_trabalho;
        $this->preferencia_contato = $preferencia_contato;
        $this->redes_sociais = $redes_sociais;
        $this->criado_em = $criado_em;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getContato(): string
    {
        return $this->contato;
    }

    public function getIdade(): string
    {
        return $this->idade;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function getRaca(): string
    {
        return $this->raca;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getDeficiencia(): string
    {
        return $this->deficiencia;
    }

    public function getCid(): string
    {
        return $this->cid;
    }

    public function getLimitacao(): string
    {
        return $this->limitacao;
    }

    public function getLaudo(): string
    {
        return $this->laudo;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getInteresse(): string
    {
        return $this->interesse;
    }

    public function getFormacao(): string
    {
        return $this->formacao;
    }

    public function getExpectativa_Salarial(): string
    {
        return $this->expectativa_salarial;
    }

    public function getModelo_Trabalho(): string
    {
        return $this->modelo_trabalho;
    }

    public function getRegime_Trabalho(): string
    {
        return $this->regime_trabalho;
    }

    public function getPreferencia_Contato(): string
    {
        return $this->preferencia_contato;
    }

    public function getRedes_Sociais(): string
    {
        return $this->redes_sociais;
    }

    public function getCriado_Em(): \DateTime
    {
        return $this->criado_em;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setContato(string $contato): void
    {
        $this->contato = $contato;
    }

    public function setIdade(string $idade): void
    {
        $this->idade = $idade;
    }

    public function setGenero(string $genero): void
    {
        $this->genero = $genero;
    }

    public function setRaca(string $raca): void
    {
        $this->raca = $raca;
    }

    public function setEstado(string $estado): void
    {
        $this->estado = $estado;
    }

    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function setDeficiencia(string $deficiencia): void
    {
        $this->deficiencia = $deficiencia;
    }

    public function setCid(string $cid): void
    {
        $this->cid = $cid;
    }

    public function setLimitacao(string $limitacao): void
    {
        $this->limitacao = $limitacao;
    }

    public function setLaudo(string $laudo): void
    {
        $this->laudo = $laudo;
    }

    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function setInteresse(string $interesse): void
    {
        $this->interesse = $interesse;
    }

    public function setFormacao(string $formacao): void
    {
        $this->formacao = $formacao;
    }

    public function setExpectativa_Salarial(string $expectativa_salarial): void
    {
        $this->expectativa_salarial = $expectativa_salarial;
    }

    public function setModelo_Trabalho(string $modelo_trabalho): void
    {
        $this->modelo_trabalho = $modelo_trabalho;
    }

    public function setRegime_Trabalho(string $regime_trabalho): void
    {
        $this->regime_trabalho = $regime_trabalho;
    }

    public function setPreferencia_Contato(string $preferencia_contato): void
    {
        $this->preferencia_contato = $preferencia_contato;
    }

    public function setRedes_Sociais(string $redes_sociais): void
    {
        $this->redes_sociais = $redes_sociais;
    }


    public function setCriado_Em(\DateTime $criado_em): void
    {
        $this->criado_em = $criado_em;
    }

}

class CurriculoRepositorio
{
    private $wpdb;

    /**
     * @param PDO $pdo
     */
    public function __construct($wpdb)
    {
        $this->wpdb = $wpdb;
    }

    public function salvar(Curriculo $curriculo)
    {
        $sql = "INSERT INTO curriculo (nome,email,contato,idade,genero,raca,estado,cidade,deficiencia,cid,limitacao,laudo,cargo,interesse,formacao,expectativa_salarial,modelo_trabalho,regime_trabalho,preferencia_contato,redes_sociais,criado_em) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $curriculo->getNome());
        $statement->bindValue(2, $curriculo->getEmail());
        $statement->bindValue(3, $curriculo->getContato());
        $statement->bindValue(4, $curriculo->getIdade());
        $statement->bindValue(5, $curriculo->getGenero());
        $statement->bindValue(6, $curriculo->getRaca());
        $statement->bindValue(7, $curriculo->getEstado());
        $statement->bindValue(8, $curriculo->getCidade());
        $statement->bindValue(9, $curriculo->getDeficiencia());
        $statement->bindValue(10, $curriculo->getCid());
        $statement->bindValue(11, $curriculo->getLimitacao());
        $statement->bindValue(12, $curriculo->getLaudo());
        $statement->bindValue(13, $curriculo->getCargo());
        $statement->bindValue(14, $curriculo->getInteresse());
        $statement->bindValue(15, $curriculo->getFormacao());
        $statement->bindValue(16, $curriculo->getExpectativa_Salarial());
        $statement->bindValue(17, $curriculo->getModelo_Trabalho());
        $statement->bindValue(18, $curriculo->getRegime_Trabalho());
        $statement->bindValue(19, $curriculo->getPreferencia_Contato());
        $statement->bindValue(20, $curriculo->getRedes_Sociais());
        $statement->bindValue(21, $curriculo->getCriado_Em()->format('Y-m-d H:i:s'));
        $statement->execute();
    }
}

if (isset($_POST['cadastro'])) {
    $dataString = $_POST['criado_em'];
    $data = new DateTime($_POST['criado_em']);

    $curriculo = new Curriculo(
        null,
        $_POST['nome'],
        $_POST['email'],
        $_POST['contato'],
        $_POST['idade'],
        $_POST['genero'],
        $_POST['raca'],
        $_POST['estado'],
        $_POST['cidade'],
        $_POST['deficiencia'],
        $_POST['cid'],
        $_POST['limitacao'],
        $_POST['laudo'],
        $_POST['cargo'],
        $_POST['interesse'],
        $_POST['formacao'],
        $_POST['expectativa_salarial'],
        $_POST['modelo_trabalho'],
        $_POST['regime_trabalho'],
        $_POST['preferencia_contato'],
        $_POST['redes_sociais'],
        $data
    );

    $curriculoRepositorio = new CurriculoRepositorio($wpdb);
    $curriculoRepositorio->salvar($curriculo);

}