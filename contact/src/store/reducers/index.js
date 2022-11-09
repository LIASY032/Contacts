import { combineReducers } from "redux";
import { PersonReducer } from "./person";
const reducer = combineReducers({
  persons: PersonReducer,
});
export default reducer;
