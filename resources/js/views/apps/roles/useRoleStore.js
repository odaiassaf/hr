// import { defineStore } from 'pinia'
// import api from './api'

// const resource = "/roles"
// export const useRoleStore = defineStore('RoleStore', {
  
//   actions: {
//     //👉 - Fetch Roles data
//     fetchRoles(params){return api.get(resource, { params })},
//   },
// })
import api from "./api"

const roleresource = "/roles"
const permissionsource = "/permissions"

export const allPermissions = () => api.get(permissionsource, {
  headers: {
    Authorization: `Bearer 1|cJjIuX7tmJyBT8oO2qUI5xg86AQiYlBqubPwRl5D`,
  },
})
export const allRoles = () => api.get(roleresource, {
  headers: {
    Authorization: `Bearer 1|cJjIuX7tmJyBT8oO2qUI5xg86AQiYlBqubPwRl5D`,
  },
})
export const viewRole = id => api.get(`${roleresource}/${id}`, {
  headers: {
    Authorization: `Bearer 1|cJjIuX7tmJyBT8oO2qUI5xg86AQiYlBqubPwRl5D`,
  },
})
export const postRole = role => api.post(roleresource, role, {
  headers: {
    Authorization: `Bearer 1|cJjIuX7tmJyBT8oO2qUI5xg86AQiYlBqubPwRl5D`,
  },
})
export const updateRole = (id, role) => api.patch(`${roleresource}/${id}`, role, {
  headers: {
    Authorization: `Bearer 1|cJjIuX7tmJyBT8oO2qUI5xg86AQiYlBqubPwRl5D`,
  },
})
export const deleteRole = id => api.delete(`${roleresource}/${id}`, {
  headers: {
    Authorization: `Bearer 1|cJjIuX7tmJyBT8oO2qUI5xg86AQiYlBqubPwRl5D`,
  },
})

