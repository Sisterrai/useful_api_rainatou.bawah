import axios from 'axios'
import { defineStore } from 'pinia'

const apiUrl = import.meta.env.VITE_API_URL

const AxiosModule = axios.create({
  baseURL: apiUrl,
  headers: {
    'Content-Type': 'application/json'
  }
})


export const useModuleStore = defineStore('moduleStore', {
    state: () => ({
        modules: [],
        loading: false,
        error: null
    }),

    actions: {
        async fetchModules() {
        this.loading = true
        try {
            const res = await AxiosModule.get('modules')
            this.modules = res.data
        } catch (error) {
            console.log(error)
        } 
        }
    }
})