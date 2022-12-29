export let errs = {};

export const initErrors = () => errs = {};

let maxLength = (value,error,item) => item.value.length > value && item.value.length > 0 ? errs[item.name] = errs[item.name] !== undefined ? Array.prototype.concat(error) : Array(error) : null

let minLength = (value,error,item) => item.value.length < value && item.value.length > 0 ? errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error) : null

let match = (value,error,item) => item.value !== document.querySelector(`[name='${value}']`).value && item.value.length > 0 ? errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error) : null

let required = (value,error,item) => item.value.length === 0 ? errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error) : null

let regex = (value,error,item) => !item.value.match(value) && item.value.length > 0  ? errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error): null

let different = (value,error,item) => item.value === document.querySelector(`[name='${value}']`).value && item.value.length > 0 ? errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error) : null

let isNumber = (value,error,item) => value === 'true' ? !item.value.match(/[0-9]/) && item.value.length > 0  ? errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error): null : errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error)

let hasNumber = (value,error,item) => value === 'true' ? !item.value.match(/[a-zA-Z0-9]/) && item.value.length > 0  ? errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error): null : errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error)

let isOneFile = (value,error,item) => value === 'true' ? item.files.length > 0 && item.files.length !== 1  ? errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error): null :  errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error)

let isImage = (value,error,item) => value === 'true' ? item.files.length > 0 && !item.files.item(0).type.includes('image/')  ? errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error): null :  errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error)

let AllisImage = (value,error,item) => {for(let file of item.files) if (!file.type.includes('image/')){errs[item.name] = errs[item.name] !== undefined ?  Array.prototype.concat(errs[item.name ],error) : Array(error);break;}}

export const NativesRules = [maxLength,minLength,match,required,regex,different,isNumber,hasNumber,isOneFile,AllisImage,isImage]

export const Rules = {
    password: {
        'rules': ['required','maxLength{16}','minLength{8}','match{password2}','regex{[a-zA-Z0-9]+[0-9]/}'],
        'errors': {
            'required': "Champs mot de passe vide",
            'minLength': "Le mot de passe est trop court",
            'maxLength': "Le mot de passe est trop long",
            'match': "Les deux champs password ne sont pas identiques",
            'regex': "champs password invalid",
        }
    },
    password2: {
        'rules': ['required','maxLength{16}','minLength{8}','match{password}','regex{[a-zA-Z0-9]+[0-9]/}'],
        'errors': {
            'required': "Champs confirmer mot de passe vide",
            'minLength': "Le mot de passe est trop court",
            'maxLength': "Le mot de passe est trop long",
            'match': "Les deux champs password ne sont pas identiques",
            'regex': "champs confirmer mot de passe invalid",
        }
    },
    email: {
        'rules': ['required','different{name}','regex{/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\.[A-Z]$/i}'],
        'errors': {
            'required': "Champs email vide",
            'regex': "champs email invalid",
            'different': "Les champs nom et email ne peuvent pas identiques"
        }
    },
    name: {
        'rules': ['required','maxLength{8}','minLength{4}','different{surname}'],
        'errors': {
            'required': "Champs nom vide",
            'minLength': "Le nom est trop court",
            'maxLength': "Le nom est trop long",
            'different': "Les champs nom et Surname ne peuvent pas etre identiques"
        }
    },
    surname: {
        'rules': ['required','maxLength{8}','minLength{4}','different{name}'],
        'errors': {
            'required': "Champs surname vide",
            'minLength': "Le surname est trop court",
            'maxLength': "Le surname est trop long",
            'different': "Les champs nom et Surname ne peuvent pas etre identiques"
        }
    },
    file: {
        'rules': ['required','isOneFile{true}','isImage{true}','AllisImage'],
        'errors': {
            'AllisImage': "Veillez selectionner uniquement que des images",
            'required': "Champs file vide",
            'isOneFile': "Plusieurs fichiers selectionner,un autorisé  ",
            'isImage': "Le fichier doit etre une image",
        }
    },
}