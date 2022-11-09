import { getPerson } from "../../services";
import {
  GET_Person,
  ERROR_GET_Person,
  SELECT_Person,
  FILTER_Person,
} from "../constants";

export async function getPersonAction(dispatch) {
  const data = await getPerson();

  if (data !== undefined && data != null && data !== "") {
    dispatch({
      type: GET_Person,
      payload: data,
    });
  } else {
    dispatch({
      type: ERROR_GET_Person,
    });
  }
}

export function selectPerson(dispatch) {
  return function (person) {
    dispatch({
      type: SELECT_Person,
      payload: person,
    });
  };
}

export function filterPersons(dispatch) {
  return function (i) {
    dispatch({
      type: FILTER_Person,
      payload: i,
    });
  };
}
