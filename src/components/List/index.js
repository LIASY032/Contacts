import React from "react";
import { Card, ListGroup } from "react-bootstrap";
import { useDispatch } from "react-redux";
import { selectPerson } from "../../store/actions/person";
import "./style.css";
function List({ user, alphabet }) {
  const dispatch = useDispatch();
  const handleSelectPerson = selectPerson(dispatch);
  return (
    <>
      {alphabet && (
        <h3 className="alphabet" id={alphabet}>
          {alphabet}
        </h3>
      )}
      <Card
        className="m-3 p-2"
        style={{ cursor: "pointer" }}
        onClick={() => {
          handleSelectPerson(user);
          window.location.href = "/detail";
        }}
      >
        <Card.Title>{user.name}</Card.Title>

        <Card.Body>
          <ListGroup>
            <ListGroup.Item>{user.phone}</ListGroup.Item>

            <ListGroup.Item>{user.email}</ListGroup.Item>
          </ListGroup>
        </Card.Body>
      </Card>
    </>
  );
}

export default List;
