<?php



class ClienteDAO
{

    public function Create(ClienteDTO $cliente)
    {
        try {
            $Sql = "INSERT INTO usuario(nome,endereco,contacto)VALUES(:nome,:endereco,:contacto))";
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            $Sql_procedure->bindValue(":nome", $cliente->getNome());
            $Sql_procedure->bindValue(":endereco", $cliente->getEndereco());
            $Sql_procedure->bindValue(":contacto", $cliente->getContacto());


            return $Sql_procedure->execute();


        } catch (Exception $ex) {
            print "Ocorreu um erro ao cadastrar";
        }

    }
    public function Update(ClienteDTO $cliente)
    {
        try {
            $Sql = "UPPDATE usuario SET nome=:nome, endereco=:endereco WHERE id=:id";
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            $Sql_procedure->bindValue(":id", $cliente->getId());
            $Sql_procedure->bindValue(":nome", $cliente->getNome());
            $Sql_procedure->bindValue(":endereco", $cliente->getEndereco());
            $Sql_procedure->bindValue(":contacto", $cliente->getContacto());


            return $Sql_procedure->execute();

        } catch (Exception $ex) {
            print "Ocorreu um erro ao actualizar";
        }

    }
    public function ReadAll()
    {
        try {
            $Sql = "SELECT id, nome,endereco,contacto FROM usuario";
            $Sql_procedure = DBConnection::getConnection()->query($Sql);
            $lista = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);

            $aux_list = array();

            foreach ($lista as $rows) {
                $aux_list[] = $this->Listar($rows);
            }
            return $aux_list;

        } catch (Exception $ex) {

            print "Ocorreu um erro ao actualizar";
        }
    }
    public function Listar($linha)
    {
        $cliente = new ClienteDTO();
        $cliente->setId($linha["id"]);
        $cliente->setNome($linha["nome"]);
        $cliente->setEndereco($linha["endereco"]);
        $cliente->setContacto($linha["contacto"]);
        return $cliente;
    }
    public function Delete(ClienteDTO $cliente)
    {
        try {

            $Sql = "DELETE FROM usuario WHERE id=:id";
            $Sql_proceure = DBConnection::getConnection()->prepare($Sql);
            $Sql_proceure->bindValue(":id", $cliente->getId());

            return $Sql_proceure->execute();

        } catch (Exception $ex) {
            print "Ocorreu um erro ao actualizar";
        }
    }














}