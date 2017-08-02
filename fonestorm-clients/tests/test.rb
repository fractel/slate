# `cd fonestorm-clients/ruby` and `bundle install` to install
# Place this file in `fonestorm-clients/ruby` and execute


$LOAD_PATH.unshift("#{File.dirname(__FILE__)}/lib")
require 'swagger_client'
require 'byebug'

api_instance = SwaggerClient::AuthApi.new

username = "2005551524"
password = "3060439019"
opts = {
  expires: 7200
}

begin
  result = api_instance.post_auth(username, password, opts)
  token = JSON.parse(result)['token']
rescue SwaggerClient::ApiError => e
  puts "Exception when calling AuthApi->post_auth: #{e}"
end

api_instance = SwaggerClient::MessagesApi.new
api_instance.api_client.config.debugging = true
api_instance.api_client.config.base_path = '/edge'
api_instance.api_client.config.host = 'dev-api.fractel.net'
api_instance.api_client.default_headers = {token: token}

to = "3212236343"
fonenumber = "3212654518"
message = "helloworld"
opts = {}

begin
  # byebug
  result = api_instance.post_messages_send(to, fonenumber, message, opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling MessagesApi->post_messages_send: #{e}"
  puts result
end
