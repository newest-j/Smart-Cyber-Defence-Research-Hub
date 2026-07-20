import axios from 'axios'

const API_BASE_URL = 'https://api.smartcyberdefencehub.org'

export const api = axios.create({
  baseURL: API_BASE_URL,
  withCredentials: true,
})

export type ContactFormPayload = {
  name: string
  email: string
  subject: string
  message: string
}

export type ApiMessageResponse = {
  message: string
}

export async function sendContactMessage(payload: ContactFormPayload) {
  const response = await api.post<ApiMessageResponse>('/api/contact', payload, {
    headers: {
      Accept: 'application/json',
    },
  })

  return response.data
}
