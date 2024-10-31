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
    private string $expectativasalarial;
    private string $modelotrabalho;
    private string $regimetrabalho;

    private string $preferenciacontato;
    private string $redessociais;


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
     * @param string $expectativasalarial
     * @param string $modelotrabalho
     * @param string $regimetrabalho
     * @param string $preferenciacontato
     * @param string $redessociais
     */
    public function __construct(?int $id, string $nome, string $email, string $contato, string $idade, string $genero, string $raca, string $estado, string $cidade, string $deficiencia, string $cid, string $limitacao, string $laudo, string $cargo, string $interesse, string $formacao, string $expectativasalarial, string $modelotrabalho, string $regimetrabalho, string $preferenciacontato, string $redessociais)
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
        $this->expectativasalarial = $expectativasalarial;
        $this->modelotrabalho = $modelotrabalho;
        $this->regimetrabalho = $regimetrabalho;
        $this->preferenciacontato = $preferenciacontato;
        $this->redessociais = $redessociais;
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

    public function getExpectativaSalarial(): string
    {
        return $this->expectativa_salarial;
    }

    public function getModeloTrabalho(): string
    {
        return $this->modelo_trabalho;
    }

    public function getRegimeTrabalho(): string
    {
        return $this->regime_trabalho;
    }

    public function getPreferenciaContato(): string
    {
        return $this->preferencia_contato;
    }

    public function getRedesSociais(): string
    {
        return $this->redes_sociais;
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

    public function setExpectativaSalarial(string $expectativa_salarial): void
    {
        $this->expectativa_salarial = $expectativa_salarial;
    }

    public function setModeloTrabalho(string $modelo_trabalho): void
    {
        $this->modelo_trabalho = $modelo_trabalho;
    }

    public function setRegimeTrabalho(string $regime_trabalho): void
    {
        $this->regime_trabalho = $regime_trabalho;
    }

    public function setPreferenciaContato(string $preferencia_contato): void
    {
        $this->preferencia_contato = $preferencia_contato;
    }

    public function setRedesSociais(string $redes_sociais): void
    {
        $this->redes_sociais = $redes_sociais;
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