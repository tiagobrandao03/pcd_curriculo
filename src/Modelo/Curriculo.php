<?php

namespace Modelo;

class Curriculo
{
    private ?int $id;
    private string $nome;
    private string $email;
    private string $contato;
    private string $idade;
    private string $genero;
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
    private string $modelo_trabalho;
    private string $regime_trabalho;
    private string $preferencia_contato;
    private string $redes_sociais;
    private \DateTime $criado_em;


    /**
     * @param int|null $id
     * @param string $nome
     * @param string $email
     * @param string $contato
     * @param string $idade
     * @param string $genero
     * @param string $raca
     * @param string $estado
     * @param string $cidade
     * @param string $deficiencia
     * @param string $cid
     * @param string $limitacao
     * @param string $laudo
     * @param string $cargo
     * @param string $interesse
     * @param string $formacao
     * @param string $expectativa_salarial
     * @param string $modelo_trabalho
     * @param string $regime_trabalho
     * @param string $preferencia_contato
     * @param string $redes_sociais
     * @param \DateTime $criado_em
     */
    public function __construct(?int   $id, string $nome, string $email, string $contato, string $idade, string
                                       $genero, string $raca, string $estado, string $cidade, string $deficiencia, string $cid, string $limitacao,
                                       string $laudo, string $cargo, string $interesse, string $formacao, string
                                       $expectativa_salarial, string $modelo_trabalho, string $regime_trabalho, string
                                       $preferencia_contato, string $redes_sociais, \DateTime $criado_em)
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
    public function getCriadoEm(): \DateTime
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



    public function setCriadoEm(\DateTime $criado_em): void
    {
        $this->criado_em = $criado_em;
    }


    /**
     * @param int|null $id
     * @param string $nome
     * @param string $email
     * @param int $contato
     * @param string $idade
     * @param string $genero
     * @param string $raca
     * @param string $estado
     * @param string $cidade
     * @param string $deficiencia
     * @param string $cid
     * @param string $limitacao
     * @param string $laudo
     * @param string $cargo
     * @param string $interesse
     * @param string $formacao
     * @param string $expectativa_salarial
     * @param string $modelo_trabalho
     * @param string $regime_trabalho
     * @param string $curriculo
     * @param string $preferencia_contato
     * @param string $redes_sociais
     * @param int|null $criado_em
     */



}