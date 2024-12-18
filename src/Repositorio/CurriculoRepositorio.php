<?php

namespace Repositorio;

use Modelo\Curriculo;

class CurriculoRepositorio
{
    private \PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    /**
    getId())
     * getNome())
     * getEmail())
     * getContato())
     * getIdade())
     * getGenero())
     * getRaca())
     * getEstado())
     * getCidade()
     * getDeficiencia()
     * getCid()
     * getLimitacao()
     * getLaudo()
     * getCargo()
     * getInteresse()
     * getFormacao()
     * getExpectativa_Salarial()
     * getModelo_Trabalho()
     * getRegime_Trabalho()
     * getCurriculo()
     * getPreferencia_Contato()
     * getRedes_Sociais()
     * getCriado_Em()
     */
    public function salvar(Curriculo $curriculo)
    {
        //:nome,:email,:contato,:idade,:genero,:raca,:estado,:cidade,:deficiencia,:cid,:limitacao,:laudo,:cargo,:interesse,
        //        :formacao,:expectativa_salarial,:modelo_trabalho,:regime_trabalho,:preferencia_contato,:redes_sociais

        $sql = "INSERT INTO curriculo (nome,email,contato,idade,genero,raca,estado,cidade,deficiencia,cid,limitacao,laudo,cargo,interesse,formacao,expectativa_salarial,modelo_trabalho,regime_trabalho,preferencia_contato,redes_sociais,criado_em) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1,$curriculo->getNome());
        $statement->bindValue(2,$curriculo->getEmail());
        $statement->bindValue(3,$curriculo->getContato());
        $statement->bindValue(4,$curriculo->getIdade());
        $statement->bindValue(5,$curriculo->getGenero());
        $statement->bindValue(6,$curriculo->getRaca());
        $statement->bindValue(7,$curriculo->getEstado());
        $statement->bindValue(8,$curriculo->getCidade());
        $statement->bindValue(9,$curriculo->getDeficiencia());
        $statement->bindValue(10,$curriculo->getCid());
        $statement->bindValue(11,$curriculo->getLimitacao());
        $statement->bindValue(12,$curriculo->getLaudo());
        $statement->bindValue(13,$curriculo->getCargo());
        $statement->bindValue(14,$curriculo->getInteresse());
        $statement->bindValue(15,$curriculo->getFormacao());
        $statement->bindValue(16,$curriculo->getExpectativa_Salarial());
        $statement->bindValue(17,$curriculo->getModelo_Trabalho());
        $statement->bindValue(18,$curriculo->getRegime_Trabalho());
        $statement->bindValue(19,$curriculo->getPreferencia_Contato());
        $statement->bindValue(20,$curriculo->getRedes_Sociais());
        $statement->bindValue(21, $curriculo->getCriado_Em()->format('Y-m-d H:i:s'));
        $statement->execute();
    }

    public function buscar(int $id)
    {
        $sql = "SELECT * FROM curriculos WHERE id=?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
        $dados = $statement->fetch(PDO::FETCH_ASSOC);

        return $this->formarObjeto($dados);
    }
}