import React from "react";
import { Card, Col, Container, ListGroup, Row } from "react-bootstrap";
import { Envelope, Person, Telephone } from "react-bootstrap-icons";
import { useSelector } from "react-redux";

function Detail() {
  const person = useSelector((state) => state.persons.selected);

  return (
    <>
      <Container style={{ maxWidth: "500px", textAlign: "center" }}>
        <h1>{person.name}</h1>

        <Row style={{ marginBottom: "10px", alignItems: "stretch" }}>
          <Col xs={4}>
            <Card className="p-3" style={{ height: "100%" }}>
              <Envelope
                size={40}
                style={{ marginLeft: "auto", marginRight: "auto" }}
              />
              {person.email}
            </Card>
          </Col>

          <Col xs={4}>
            <Card className="p-3" style={{ height: "100%" }}>
              <Telephone
                size={40}
                style={{ marginLeft: "auto", marginRight: "auto" }}
              />
              {person.phone}
            </Card>
          </Col>
          <Col xs={4}>
            <Card className="p-3" style={{ height: "100%" }}>
              <Person
                size={40}
                style={{ marginLeft: "auto", marginRight: "auto" }}
              />
              {person.website}
            </Card>
          </Col>
        </Row>
        <Row>
          <Col>
            <Card className="p-3" style={{ height: "100%" }}>
              <Card.Title>Address</Card.Title>
              <ListGroup>
                <ListGroup.Item>Street: {person.address.street}</ListGroup.Item>
                <ListGroup.Item>Suite: {person.address.suite}</ListGroup.Item>
                <ListGroup.Item>City: {person.address.city}</ListGroup.Item>
                <ListGroup.Item>
                  Zipcode: {person.address.zipcode}
                </ListGroup.Item>
              </ListGroup>
            </Card>
          </Col>
          <Col>
            <Card className="p-3" style={{ height: "100%" }}>
              <Card.Title>Company</Card.Title>
              <ListGroup>
                <ListGroup.Item>Name: {person.company.name}</ListGroup.Item>
                <ListGroup.Item>
                  CatchPhrase: {person.company.catchPhrase}
                </ListGroup.Item>

                <ListGroup.Item>Bs: {person.company.bs}</ListGroup.Item>
              </ListGroup>
            </Card>
          </Col>
        </Row>
      </Container>
    </>
  );
}

export default Detail;
